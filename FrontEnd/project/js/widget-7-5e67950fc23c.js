(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{143:function(e,t,n){var i=n(837),o=n(547);e.exports=o.extend({SoundView:i})},547:function(e,t,n){var i=n(80),o=n(529),l=n(50),s=n(38),r=n(546);e.exports=s.extend(r,o,{ModelClass:l,performanceSelector:".playButton",SoundView:null,css:n(548),className:"singleSound g-box-full",template:function(){return""},defaults:{resource_id:null,resource_type:null,secret_token:null},setup:function(){var e=this.options.secret_token;e&&this.model.set({secret_token:e,sharing:"private"})},renderDecorate:function(){var e=this.subviews.sound;e||(e=this.addSubview(new this.SoundView(this.options),"sound")),this.$el.empty().append(e.render().el)},getFetchErrorMessage:function(){return i.SOUND_NOT_FOUND}})},548:function(e,t,n){var i=n(4),o=n(549);"string"==typeof(o=o.__esModule?o.default:o)&&(o=[[e.i,o,""]]);var l={insert:"head",singleton:!1};i(o,l);e.exports=o.locals||{}},549:function(e,t,n){(t=n(1)(!1)).push([e.i,".singleSound{border-radius:3px;overflow:hidden}",""]),e.exports=t},837:function(e,t,n){var i=n(542),o=n(19),l=n(838),s=n(564),r=n(509),a=n(50),u=n(38),d=n(520);e.exports=u.extend(i,r,{className:"visualSoundContainer g-box-full",css:n(840),template:n(842),ModelClass:a,showRelatedAfterTeaser:!1,states:{related:function(e){var t,n,i;e&&(m.call(this),this.toggleState("teaser",!1));t=this.subviews.relatedSounds,i=t&&t.collection,_.call(this,e),e&&(n=o.getCurrentSound(),i&&n&&i.models.slice(0,i.indexOf(n)+1).forEach(t.removeListItem.bind(t)),t.getLength()||t.rerender());this.toggleState("relatedVisible",e)},teaser:function(e){e&&this.toggleState("related",!1);this.toggleTeaserView(e)}},setup:function(){c.call(this,!0)},dispose:function(){c.call(this,!1)},onTeaserDismiss:function(){this.showRelatedAfterTeaser&&this.model.areRelatedSoundsEnabled()&&this.addDeferred(setTimeout(function(){this.toggleState("related",!0),this.showRelatedAfterTeaser=!1}.bind(this),1.5*this.TEASER_TRANSITION_DURATION))}});function c(e){o[e=e?"on":"off"]("play",p,this)[e]("pause",h,this)[e]("change:current",f,this)}function p(){b.call(this)?(this.model.areRelatedSoundsEnabled()&&(m.call(this),this.toggleState("related",!1)),this.toggleState("teaser",!1)):_.call(this,!1)}function h(e){b.call(this)?this.teaserCanBeDisplayed()&&this.model.isTeaserEnabled()?(this.toggleState("teaser",!0),e.isEnded()&&(this.showRelatedAfterTeaser=!0)):this.model.areRelatedSoundsEnabled()&&this.toggleState("related",!0):_.call(this,!0)}function f(e){var t=e.current,n=e.prev;t&&v.call(this,t),n&&n.seek(0)}function v(e){var t,n=this.subviews.visualAudible;n&&n.model.id===e.id||(t=function(e){return new d({resource_id:e.resource_id,resource_type:e.resource_type})}(e),this.removeSubview(n),this.addSubview(t.render(),"visualAudible"),t.whenInserted().done(function(){t.$el.removeClass("animate"),this.addDeferred(setTimeout(n._dispose.bind(n),1e3))}.bind(this)),t.$el.addClass("animate g-transition-transform").appendTo(this.$$("sound")),this.toggleState("related",!1))}function m(){var e,t=this.subviews.relatedSounds;t||((t=new s({resource_id:this.model.id})).render(),this.addSubview(t,"relatedSounds"),(e=t.collection).fetch().done(g.bind(this,e))),this.$$("related").append(t.el)}function g(e){var t=new l({resource_id:this.model.resource_id,own_sounds:e.hasOwnSounds});this.$$("related").prepend(t.render().el)}function b(){return this.getWindowHeight()>130}function _(e){var t=this.subviews.visualAudible;t&&t.toggleBackgroundState(e)}},838:function(e,t,n){var i=n(50),o=n(38);e.exports=o.extend({template:n(839),className:"relatedSoundsTitle sc-truncate sc-text-verylight",ModelClass:i,requiredAttributes:["user","title","permalink_url"],defaults:{own_sounds:!1},getTemplateData:function(e){var t={isOwnSounds:this.options.own_sounds};return this.options.own_sounds?(t.link=e.user.permalink_url,t.text=e.user.username):(t.link=e.permalink_url,t.text=e.title),t}})},839:function(e,t,n){var i=n(79);e.exports=(i.default||i).template({1:function(e,t,n,i,o){var l,s=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return(null!=(l=s(n,"if").call(null!=t?t:e.nullContext||{},null!=t?s(t,"isContinuousPlayEnabled"):t,{name:"if",hash:{},fn:e.program(2,o,0),inverse:e.program(5,o,0),data:o,loc:{start:{line:2,column:2},end:{line:10,column:9}}}))?l:"")+"\n"},2:function(e,t,i,o,l){var s,r=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return null!=(s=(n(507)||t&&r(t,"$t")||e.hooks.helperMissing).call(null!=t?t:e.nullContext||{},{name:"$t",hash:{text:null!=t?r(t,"text"):t,link:null!=t?r(t,"link"):t},fn:e.program(3,l,0),inverse:e.noop,data:l,loc:{start:{line:3,column:4},end:{line:5,column:11}}}))?s:""},3:function(e,t,n,i,o){return'      Play more tracks by <a class="sc-link-white" href="[[link]]">[[text]]</a>\n'},5:function(e,t,i,o,l){var s,r=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return null!=(s=(n(507)||t&&r(t,"$t")||e.hooks.helperMissing).call(null!=t?t:e.nullContext||{},{name:"$t",hash:{text:null!=t?r(t,"text"):t,link:null!=t?r(t,"link"):t},fn:e.program(6,l,0),inverse:e.noop,data:l,loc:{start:{line:7,column:4},end:{line:9,column:11}}}))?s:""},6:function(e,t,n,i,o){return'      Play another track by <a class="sc-link-white" href="[[link]]">[[text]]</a>\n'},8:function(e,t,i,o,l){var s,r=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return null!=(s=(n(507)||t&&r(t,"$t")||e.hooks.helperMissing).call(null!=t?t:e.nullContext||{},{name:"$t",hash:{text:null!=t?r(t,"text"):t,link:null!=t?r(t,"link"):t},fn:e.program(9,l,0),inverse:e.noop,data:l,loc:{start:{line:13,column:2},end:{line:15,column:9}}}))?s:""},9:function(e,t,n,i,o){return'    Play more tracks like <a class="sc-link-white" href="[[link]]">[[text]]</a>\n'},compiler:[8,">= 4.3.0"],main:function(e,t,n,i,o){var l,s=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return null!=(l=s(n,"if").call(null!=t?t:e.nullContext||{},null!=t?s(t,"isOwnSounds"):t,{name:"if",hash:{},fn:e.program(1,o,0),inverse:e.program(8,o,0),data:o,loc:{start:{line:1,column:0},end:{line:16,column:7}}}))?l:""},useData:!0})},840:function(e,t,n){var i=n(4),o=n(841);"string"==typeof(o=o.__esModule?o.default:o)&&(o=[[e.i,o,""]]);var l={insert:"head",singleton:!1};i(o,l);e.exports=o.locals||{}},841:function(e,t,n){(t=n(1)(!1)).push([e.i,".visualSoundContainer{position:fixed;top:0;left:0}.visualSoundContainer__sound>.visualAudible{position:absolute;top:0;left:0;-webkit-transform:translateZ(0)}.visualSoundContainer__sound>.visualAudible.animate{-webkit-transform:translate3d(100%,0,0)}.visualSoundContainer__teaser{position:absolute;right:0;bottom:0;left:0;top:0;opacity:0;pointer-events:none}.visualSoundContainer.teaserVisible .visualSoundContainer__teaser{opacity:1;pointer-events:auto}.visualSoundContainer__related{position:absolute;right:0;bottom:0;left:0;padding:30px 12px;transform:translate3d(0,100%,0)}.visualSoundContainer .visualAudible__waveform{bottom:30px}.visualSoundContainer__related>.relatedSoundsTitle{margin-bottom:5px}.visualSoundContainer.relatedVisible .visualSoundContainer__related{transform:translateZ(0);z-index:1}.visualSoundContainer .adContainer{position:absolute;right:0;left:0;top:0;bottom:0;transform:translate3d(0,100%,0);visibility:hidden}.visualSoundContainer .adContainer>*{visibility:visible}.visualSoundContainer.adState .adContainer{transform:translateZ(0)}",""]),e.exports=t},842:function(e,t,n){var i=n(79);e.exports=(i.default||i).template({compiler:[8,">= 4.3.0"],main:function(e,t,i,o,l){var s=e.lookupProperty||function(e,t){if(Object.prototype.hasOwnProperty.call(e,t))return e[t]};return'<div class="visualSoundContainer__sound">\n  '+e.escapeExpression((n(506)||t&&s(t,"$view")||e.hooks.helperMissing).call(null!=t?t:e.nullContext||{},n(520),{name:"$view",hash:{key:"visualAudible",resource_type:null!=t?s(t,"_resource_type"):t,resource_id:null!=t?s(t,"_resource_id"):t},data:l,loc:{start:{line:2,column:2},end:{line:5,column:25}}}))+'\n</div>\n<div class="visualSoundContainer__related g-transition-transform"></div>\n<div class="visualSoundContainer__teaser g-transition-opacity"></div>\n'},useData:!0})}}]);
//# sourceMappingURL=http://ent/web-sourcemaps/widget-7-5e67950fc23c.js.map