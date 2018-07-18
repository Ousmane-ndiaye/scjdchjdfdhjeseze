(function(t){var e={width:"200",height:"350",position:"right",fadeTime:1,iconColor:"black",iconBackgroundColor:"#eee",recentCount:36,emojiSet:"apple",container:"body",button:!0,contenteditable:!1,cdnUrl:"/"},i=300,s=600,n=100,o=350,a=[{name:"people",label:"People"},{name:"nature",label:"Nature"},{name:"food",label:"Food"},{name:"activity",label:"Activities"},{name:"travel",label:"Travel & Places"},{name:"object",label:"Objects"},{name:"symbol",label:"Symbols"},{name:"flag",label:"Flags"}],r=function(t,i){return"<img class='emojiCe' src='"+(EmberENV.cdnUrl||e.cdnUrl)+"assets/images/emojis/emoji-"+t.shortcode+".png' alt='"+t.codes+"'/>"},c=function(e,i,s){i=i||!0,s=s||!1
var n,o,a,c,h,l,d=t.fn.emojiPicker,p=d.emojis,u=d.codesAlias
for(var g in u)u.hasOwnProperty(g)&&(n=p[u[g]],(h=e.indexOf(g))>-1&&(o=(a=0===h&&i?"":" ")+g+(c=h===e.length-g.length?"":" "),l=a+(s?n.codes:r(n,d.settings))+c,e=e.replace(o,l)))
return e},h=function(e){var i,s=t.fn.emojiPicker,n=s.emojis,o=s.codes,a=(s.unicodeRegexp,s.regUnicode)
return e=e.replace(a,function(t){return o.hasOwnProperty(t)?(i=n[o[t]],r(i,s.settings)):t}),e=c(e,!0,!1)}
function l(a,r){this.element=a,this.$el=t(a),this.settings=t.extend({},e,r),this.$container=t(this.settings.container),this.settings.width=parseInt(this.settings.width),this.settings.height=parseInt(this.settings.height),this.settings.contenteditable=this.settings.contenteditable.constructor===Boolean&&this.settings.contenteditable,this.settings.width>=s?this.settings.width=s:this.settings.width<i&&(this.settings.width=i),this.settings.height>=o?this.settings.height=o:this.settings.height<n&&(this.settings.height=n);-1==t.inArray(this.settings.position,["left","right"])&&(this.settings.position=e.position),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)||this.init()}t.fn.replaceEmojiShortcuts=c,t.fn.getTextHtml=h,t.extend(l.prototype,{init:function(){this.active=!1,this.addPickerIcon(),this.updateLabels(),this.createPicker(),this.listen(),this.ce()},ce:function(){if(this.settings.contenteditable){var t=this.$el,e=this,i=t.text()
t.html(h(i)),t.on("input click",function(t){var i,s=this.ownerDocument||this.document
if((i=(s.defaultView||s.parentWindow).getSelection()).rangeCount>0){var n=i.getRangeAt(0)
i.removeAllRanges(),i.addRange(n),e.editorRange=n}e.getCeText()})}},getCeText:function(){var e=this.$el.clone()
t("img",e).each(function(){t(this).replaceWith(t(this).attr("alt"))}),-1===navigator.userAgent.indexOf("Chrome")&&t("br",e).each(function(){t(this).replaceWith("\n")}),this.$el.data("text",e.text())},addPickerIcon:function(){if(this.settings.button){var e=this.$el.outerHeight(),i=e>50?50:e,s=this.$el.width()
this.$el.width(s),this.$wrapper=this.$el.wrap("<div class='emojiPickerIconWrap'></div>").parent(),this.$icon=t('<div class="emojiPickerIcon"></div>').height(i).width(i).addClass(this.settings.iconColor).css("backgroundColor",this.settings.iconBackgroundColor),this.$wrapper.append(this.$icon)}},updateLabels:function(){var t=this.settings.labels
if(t)for(var e=0,i=a.length;e<i;e++)a[e].label=t(a[e].name)},createPicker:function(){this.$picker=t(function(e){var i=[],s={undefined:"object"},n={},o=e.storageAvailable,r=a.length
if(t.each(t.fn.emojiPicker.emojis,function(t,e){var i=s[e.category]||e.category
n[i]=n[i]||[],n[i].push(e)}),i.push('<div class="emojiPicker">'),i.push('<div class="searchbar">'),i.push('<input type="search" placeholder="'+e.labels("search")+'">'),i.push("</div>"),i.push('<div class="sections">'),i.push('<section class="search">'),i.push('<div class="wrap" style="display:none;"><h1>'+e.labels("results")+"</h1></div>"),i.push("</section>"),o){var c=[],h=0
localStorage.emojis&&(c=JSON.parse(localStorage.emojis),h=c.length),i.push('<section class="recent" data-count="'+c.length+'">'),i.push("<h1>"+e.labels("recent")+'</h1><div class="wrap">')
for(var l=h-1;l>-1;l--)i.push('<em><span class="emoji emoji-'+c[l]+'" title="'+c[l]+'"></span></em>')
i.push("</div></section>")}for(var l=0;l<r;l++){var d=n[a[l].name].length
i.push('<section class="'+a[l].name+'" data-count="'+d+'">'),i.push("<h1>"+a[l].label+'</h1><div class="wrap">')
for(var p=0;p<d;p++){var u=n[a[l].name][p]
i.push('<em><span class="emoji emoji-'+u.shortcode+'" title="'+u.shortcode+'"></span></em>')}i.push("</div></section>")}i.push("</div>"),i.push('<nav class="footer">'),o&&i.push('<div class="tab active" data-tab="recent"><div class="emoji emoji-tab-recent"></div></div>')
for(var l=0;l<r;l++)i.push('<div class="tab'+(o||0!=l?"":" active")+'" data-tab="'+a[l].name+'"><div class="emoji emoji-tab-'+a[l].name+'"></div></div>')
return i.push("</nav>"),i.push("</div>"),i.join("\n")}(this.settings)).appendTo(this.$container).width(this.settings.width).height(this.settings.height).css("z-index",1e4),this.$picker.find(".sections").height(parseInt(this.settings.height)-67),this.settings.width<240&&this.$picker.find(".emoji").css({width:"1em",height:"1em"})},destroyPicker:function(){return this.$picker.unbind("mouseover mouseout click"),this.$picker.find("nav .tab").unbind("mouseover mouseout click"),this.$picker.find(".sections").unbind("scroll"),this.$picker.find("section.search input").unbind("keyup search"),this.$picker.find(".shortcode").unbind("mouseover"),this.$el.unbind("click input"),this.$picker.remove(),t(document.body).unbind("click",t.proxy(this.clickOutside,this)),t(window).unbind("resize",t.proxy(this.updatePosition,this)),t.removeData(this.$el.get(0),"emojiPicker"),this},listen:function(){this.settings.button&&this.$wrapper.find(".emojiPickerIcon").click(t.proxy(this.iconClicked,this)),this.$picker.on("click","em",t.proxy(this.emojiClicked,this)),this.$picker.on("mouseover","em",t.proxy(this.emojiMouseover,this)),this.$picker.on("mouseout","em",t.proxy(this.emojiMouseout,this)),this.$picker.find("nav .tab").click(t.proxy(this.emojiCategoryClicked,this)).mouseover(t.proxy(this.emojiTabMouseover,this)).mouseout(t.proxy(this.emojiMouseout,this)),this.$picker.find(".sections").scroll(t.proxy(this.emojiScroll,this)),this.$picker.click(t.proxy(this.pickerClicked,this)),this.$picker.find("div.searchbar input").on("keyup search",t.proxy(this.searchCharEntered,this)),this.$picker.find(".shortcode").mouseover(function(t){t.stopPropagation()}),t(document.body).click(t.proxy(this.clickOutside,this)),t(window).resize(t.proxy(this.updatePosition,this))},updatePosition:function(){var t=this.$picker.offsetParent().offset(),e=this.$el.offset()
"right"==this.settings.position&&(e.left+=this.$el.outerWidth()-this.settings.width),e.top+=this.$el.outerHeight()
var i={top:e.top-t.top,left:e.left-t.top}
return this.$picker.css({top:i.top,left:i.left}),this},hide:function(){this.$picker.hide(this.settings.fadeTime,"linear",function(){this.active=!1,this.settings.onHide&&this.settings.onHide(this.$picker,this.settings,this.active)}.bind(this))},show:function(){this.$el.focus(),this.updatePosition(),this.$picker.show(this.settings.fadeTime,"linear",function(){this.active=!0,this.settings.onShow&&this.settings.onShow(this.$picker,this.settings,this.active)}.bind(this))},iconClicked:function(){this.$picker.is(":hidden")?(this.$picker.find("div.searchbar input").val(""),this.$picker.find("div.searchbar input").trigger("keyup"),this.show(),this.$picker.find("div.searchbar input").length>0&&this.$picker.find("div.searchbar input").focus()):this.hide()},emojiClicked:function(i){var s=t(i.target).parent().find(".emoji").attr("class").split("emoji-")[1],n=function(e){for(var i=t.fn.emojiPicker.emojis,s=0;s<i.length;s++)if(i[s].shortcode==e)return i[s]}(s),o=n.codes
if(this.settings.contenteditable){void 0===this.editorRange&&(this.$el.focus(),this.$el.trigger("input"))
var a=this.$el.children()
a.last()&&"P"===a.last().prop("tagName")&&/<br>/i.test(a.last().html())&&(a.last().find("br").remove(),"<br>"!==a.last("p").html()&&"<BR>"!==a.last("p").html()||a.last("p").remove()),this.editorRange=function(t,e){var i=document.createElement("div")
i.innerHTML=t
var s,n,o=document.createDocumentFragment()
for(;s=i.firstChild;)n=o.appendChild(s)
e.insertNode(o),n&&(e.setStartAfter(n),e.collapse(!1))
return e}(r(n,this.settings),this.editorRange),this.getCeText()}else(function(t,e){if(document.selection){t.focus()
var i=document.selection.createRange()
i.text=e,t.focus()}else if(t.selectionStart||"0"==t.selectionStart){var s=t.selectionStart,n=t.selectionEnd,o=t.scrollTop
t.value=t.value.substring(0,s)+e+t.value.substring(n,t.value.length),t.focus(),t.selectionStart=s+e.length,t.selectionEnd=s+e.length,t.scrollTop=o}else t.focus(),t.value+=e})(this.element,o)
this.settings.storageAvailable&&(function(t){var i=[]
localStorage.emojis&&(i=JSON.parse(localStorage.emojis))
var s=i.indexOf(t)
s>-1&&i.splice(s,1)
i.push(t),i.length>e.recentCount&&i.shift()
localStorage.emojis=JSON.stringify(i)}(s),function(e){var i=JSON.parse(localStorage.emojis),s=[],n=t("section.recent")
i.length?n.show():n.hide()
for(var o=i.length-1;o>=0;o--)s.push('<em><span class="emoji emoji-'+i[o]+'" title="'+i[o]+'"></span></em>')
t("section.recent .wrap").html(s.join(""))}()),this.settings.onClicked&&this.settings.onClicked(),t(this.element).trigger("keyup"),this.$picker.find("div.searchbar input").length>0&&this.$picker.find("div.searchbar input").focus()},emojiMouseover:function(e){var i=t(e.target).parent().find(".emoji").attr("class").split("emoji-")[1],s=t(e.target).parents(".emojiPicker").find(".shortcode")
s.find(".random").hide(),s.find(".info").show().html('<div class="emoji emoji-'+i+'"></div><em>'+i+"</em>")},emojiMouseout:function(e){t(e.target).parents(".emojiPicker").find(".shortcode .info").empty().hide(),t(e.target).parents(".emojiPicker").find(".shortcode .random").show()},emojiCategoryClicked:function(e){var i=""
this.$picker.find("nav .tab").removeClass("active"),t(e.target).parent().hasClass("tab")?(i=t(e.target).parent().attr("data-tab"),t(e.target).parent(".tab").addClass("active")):(i=t(e.target).attr("data-tab"),t(e.target).addClass("active"))
var s=this.$picker.find("section."+i),n=s.parent().scrollTop()+s.offset().top-s.parent().offset().top
t(".sections").off("scroll")
var o=this
t(".sections").animate({scrollTop:n},250,function(){o.$picker.find(".sections").on("scroll",t.proxy(o.emojiScroll,o))})},emojiTabMouseover:function(e){var i=""
i=t(e.target).parent().hasClass("tab")?t(e.target).parent().attr("data-tab"):t(e.target).attr("data-tab")
for(var s="",n=0;n<a.length;n++)a[n].name==i&&(s=a[n].label)
""==s&&(s=this.settings.labels("recent"))
var o='<em class="tabTitle">'+s+' <span class="count">('+t("section."+i).attr("data-count")+" emojis)</span></em>",r=t(e.target).parents(".emojiPicker").find(".shortcode")
r.find(".random").hide(),r.find(".info").show().html(o)},emojiScroll:function(e){var i=t("section")
t.each(i,function(e,s){var n=i[e],o=t(n).position().top
if("search"==n.className||"people"==n.className&&o>1)return t(n).parents(".emojiPicker").find("nav .tab").removeClass("active"),void t(n).parents(".emojiPicker").find("nav .tab[data-tab=recent]").addClass("active")
o<=1&&(t(n).parents(".emojiPicker").find("nav .tab").removeClass("active"),t(n).parents(".emojiPicker").find("nav .tab[data-tab="+n.className+"]").addClass("active"))})},pickerClicked:function(t){t.stopPropagation()},clickOutside:function(t){this.active&&this.hide()},searchCharEntered:function(e){var i=t(e.target).val(),s=this.$picker.find(".sections section.search"),n=this.$picker.find(".sections section.recent"),o=s.find(".wrap"),a=this.$picker.find(".sections section"),r=[]
if(this.settings.storageAvailable&&localStorage.emojis&&(r=JSON.parse(localStorage.emojis)),""==i&&(a.show(),o.hide(),r.length||n.hide()),i.length>0){a.hide(),s.show(),o.show()
var c=[],h=this.settings.labels
o.find("em").remove(),t.each(t.fn.emojiPicker.emojis,function(t,e){var s=e.shortcode
s.indexOf(i)>-1&&c.push('<em><div class="emoji emoji-'+s+'" title="'+s+'"></div></em>')}),c.length?(o.find("h1").text(h("results")),o.append(c.join(""))):o.find("h1").text(h("no_results"))}else a.show(),o.hide(),r.length||n.hide()}}),t.fn.emojiPicker=function(e){return"string"==typeof e?(this.each(function(){var i=t.data(this,"emojiPicker")
switch(e){case"toggle":i.iconClicked()
break
case"destroy":i.destroyPicker()
break
case"position":i.updatePosition()}}),this):(this.each(function(){t.data(this,"emojiPicker")||t.data(this,"emojiPicker",new l(this,e))}),this)},String.fromCodePoint||(String.fromCodePoint=function(){var t,e,i,s,n=[]
for(s=0;s<arguments.length;++s)e=(t=arguments[s])-65536,i=t>65535?[55296+(e>>10),56320+(1023&e)]:[t],n.push(String.fromCharCode.apply(null,i))
return n.join("")})})(jQuery)
