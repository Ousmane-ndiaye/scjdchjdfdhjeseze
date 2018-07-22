/**
 * Theme: Montran Admin Template
 * Author: Coderthemes
 * Component: Editable
 *
 */

(function($) {

    'use strict';

    var EditableTable = {

        options: {
            addButton: '#addToTable',
            table: '#datatable-editable',
            dialog: {
                wrapper: '#dialog',
                cancelButton: '#dialogCancel',
                confirmButton: '#dialogConfirm',
            }
        },

        initialize: function() {
            this
                .setVars()
                .build()
                .events();
        },

        setVars: function() {
            this.$table = $(this.options.table);
            this.$addButton = $(this.options.addButton);
            this.$nomChamps = this.$table.data('leschamps').replace(/ /g, '').split(",");;

            // dialog
            this.dialog = {};
            this.dialog.$wrapper = $(this.options.dialog.wrapper);
            this.dialog.$cancel = $(this.options.dialog.cancelButton);
            this.dialog.$confirm = $(this.options.dialog.confirmButton);

            return this;
        },

        build: function() {
            this.datatable = this.$table.DataTable({
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                "oLanguage": {
                    "oPaginate": {
                        "sFirst": "Premier",
                        "sLast": "Dérnier",
                        "sNext": "Suivant",
                        "sPrevious": "Précedent",
                    },
                    "sSearch": "Recherche:",
                    "sEmptyTable": "Aucune donnée disponible",
                    "sInfo": "affichage de _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty": "Aucune donnée disponible",
                    "sInfoFiltered": "(Recherché sur _MAX_ éléments au total)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "sLengthMenu": "Afficher par _MENU_ éléments",
                    "loadingRecords": "Chargement...",
                    "processing": "procéssus...",
                    "sZeroRecords": "Aucun résultat trouvé",
                },
                "iDisplayLength": 7,
                "aLengthMenu": [
                    [7, 10, 25, 50, 100, -1],
                    [7, 10, 25, 50, 100, "Tout"]
                ],
                "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "{{asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')}}"
                }
            });

            window.dt = this.datatable;

            return this;
        },

        events: function() {
            var _self = this;

            this.$table
                .on('click', 'a.save-row', function(e) {
                    e.preventDefault();

                    _self.rowSave($(this).closest('tr'));
                })
                .on('click', 'a.cancel-row', function(e) {
                    e.preventDefault();

                    _self.rowCancel($(this).closest('tr'));
                })
                .on('click', 'a.edit-row', function(e) {
                    e.preventDefault();

                    _self.rowEdit($(this).closest('tr'));
                })
                .on('click', 'a.remove-row', function(e) {
                    e.preventDefault();

                    var $row = $(this).closest('tr');

                    $.magnificPopup.open({
                        items: {
                            src: _self.options.dialog.wrapper,
                            type: 'inline'
                        },
                        preloader: false,
                        modal: true,
                        callbacks: {
                            change: function() {
                                _self.dialog.$confirm.on('click', function(e) {
                                    e.preventDefault();

                                    _self.rowRemove($row);
                                    $.magnificPopup.close();
                                });
                            },
                            close: function() {
                                _self.dialog.$confirm.off('click');
                            }
                        }
                    });
                });

            this.$addButton.on('click', function(e) {
                e.preventDefault();

                _self.rowAdd();
            });

            this.dialog.$cancel.on('click', function(e) {
                e.preventDefault();
                $.magnificPopup.close();
            });

            return this;
        },

        // ==========================================================================================
        // ROW FUNCTIONS
        // ==========================================================================================
        rowAdd: function() {
            this.$addButton.attr({ 'disabled': 'disabled' });

            var actions,
                data,
                $row,
                nbreInput = [];

            actions = [
                '<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>',
                '<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
                '<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
                '<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
            ].join(' ');

            for (let i = 0; i < this.$nomChamps.length; i++) {
                nbreInput.push('');
            }

            nbreInput.push(actions);

            data = this.datatable.row.add(nbreInput);
            $row = this.datatable.row(data[0]).nodes().to$();

            $row
                .addClass('adding')
                .find('td:last')
                .addClass('actions');

            this.rowEdit($row);

            this.datatable.order([0, 'asc']).draw(); // always show fields
        },

        rowCancel: function($row) {
            var _self = this,
                $actions,
                i,
                data;

            if ($row.hasClass('adding')) {
                this.rowRemove($row);
            } else {

                data = this.datatable.row($row.get(0)).data();
                this.datatable.row($row.get(0)).data(data);

                $actions = $row.find('td.actions');
                if ($actions.get(0)) {
                    this.rowSetActionsDefault($row);
                }

                this.datatable.draw();
            }
        },

        rowEdit: function($row) {
            var _self = this,
                nomChamps = this.$nomChamps,
                data;

            data = this.datatable.row($row.get(0)).data();

            $row.children('td').each(function(i) {
                var $this = $(this);

                if ($this.hasClass('actions')) {
                    _self.rowSetActionsEditing($row);
                } else {
                    if (nomChamps[i] === 'ref' || nomChamps[i] === 'jour') {
                        $this.html('<input type="text" name="' + nomChamps[i] + '" class="form-control input-block" disabled="disabled" value="' + data[i] + '"/>');
                    } else if (nomChamps[i] === 'disponible') {
                        var select = '<select class="form-control" name="' + nomChamps[i] + '">';
                        var option = "";
                        if (data[i] === "OUI") {
                            option +=
                                '<option value="OUI" selected>OUI</option>' +
                                '<option value="NON">NON</option>';
                        } else {
                            option +=
                                '<option value="OUI">OUI</option>' +
                                '<option value="NON" selected>NON</option>';
                        }
                        select += option + '</select>';
                        $this.html(select);
                    } else if (nomChamps[i] === 'hOuverture' || nomChamps[i] === 'hFermeture') {
                        var input =
                            '<div class="input-group m-b-15">' +
                            '<div class="bootstrap-timepicker"><input id="' + nomChamps[i] + "" + $this.data('id') + '" name="' + nomChamps[i] + "" + $this.data('id') + '" value="' + data[i] + '" type="text" class="form-control"></div>' +
                            '<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>' +
                            '</div>';
                        $this.html(input);
                        for (let i = 1; i <= 7; i++) {
                            jQuery('#hOuverture' + i).timepicker({ showMeridian: false });
                            jQuery('#hFermeture' + i).timepicker({ showMeridian: false });
                        }
                    } else {
                        $this.html('<input type="text" name="' + nomChamps[i] + '" class="form-control input-block" value="' + data[i] + '"/>');
                    }
                }
            });
        },

        rowSave: function($row) {
            var _self = this,
                $actions,
                values = [];

            if ($row.hasClass('adding')) {
                this.$addButton.removeAttr('disabled');
                $row.removeClass('adding');
            }

            values = $row.find('td').map(function() {
                var $this = $(this);

                if ($this.hasClass('actions')) {
                    _self.rowSetActionsDefault($row);
                    return _self.datatable.cell(this).data();
                } else {
                    return $.trim(!$this.find('input').val() ? $this.find('option:selected').val() : $this.find('input').val());
                }
            });

            this.datatable.row($row.get(0)).data(values);

            $actions = $row.find('td.actions');
            if ($actions.get(0)) {
                this.rowSetActionsDefault($row);
            }

            this.datatable.draw();
        },

        rowRemove: function($row) {
            if ($row.hasClass('adding')) {
                this.$addButton.removeAttr('disabled');
            }

            this.datatable.row($row.get(0)).remove().draw();
        },

        rowSetActionsEditing: function($row) {
            $row.find('.on-editing').removeClass('hidden');
            $row.find('.on-default').addClass('hidden');
        },

        rowSetActionsDefault: function($row) {
            $row.find('.on-editing').addClass('hidden');
            $row.find('.on-default').removeClass('hidden');
        }

    };

    $(function() {
        EditableTable.initialize();
    });

}).apply(this, [jQuery]);