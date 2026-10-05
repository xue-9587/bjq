<?php
/* AUTO-GENERATED from app.js by build/gen_player_assets.js — do not edit by hand. */
if (!function_exists('build_player_html')) {

  define('PLAYER_CSS', <<<'PLAYER_CSS_EOF'
:root{--bg:#23262e;--bg-2:#1f222a;--panel:#23262e;--line:#2c313b;--accent:#7c5cff;--accent-2:#13c2c2;--grad:linear-gradient(135deg,#7c5cff,#13c2c2);--text:#e8ebf2;--muted:#98a1b3;--chip:#1b2433;--sh-dark:#16181d;--sh-light:#30343f;--nm-out:6px 6px 12px var(--sh-dark),-6px -6px 12px var(--sh-light);--nm-out-sm:4px 4px 8px var(--sh-dark),-4px -4px 8px var(--sh-light);--nm-out-lg:11px 11px 24px var(--sh-dark),-11px -11px 24px var(--sh-light);--nm-in:inset 5px 5px 10px var(--sh-dark),inset -5px -5px 10px var(--sh-light);--nm-in-sm:inset 3px 3px 6px var(--sh-dark),inset -3px -3px 6px var(--sh-light);--nm-in-lg:inset 7px 7px 15px var(--sh-dark),inset -7px -7px 15px var(--sh-light);}
*{box-sizing:border-box;margin:0;padding:0;}
html,body{height:100%;}
body{background:var(--bg);color:var(--text);font-family:'PingFang SC','Microsoft YaHei',system-ui,sans-serif;display:flex;flex-direction:column;overflow:hidden;}
#floatbar{position:fixed;right:18px;top:50%;transform:translateY(-50%);display:flex;flex-direction:column;gap:10px;z-index:30;opacity:0;pointer-events:none;transition:opacity .25s ease;}
#floatbar.show{opacity:1;pointer-events:auto;}
#floatBtns{display:flex;flex-direction:column;gap:10px;}
#floatBtns button{background:var(--bg);color:var(--text);border:none;border-radius:12px;padding:10px 14px;font-size:13px;cursor:pointer;box-shadow:var(--nm-out-sm);transition:.15s;white-space:nowrap;}
#floatBtns button:hover{box-shadow:var(--nm-out);color:#fff;}
#floatBtns button:active{box-shadow:var(--nm-in-sm);}
#stage{position:relative;flex:1;overflow:auto;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:20px;padding:28px 24px;background:var(--bg);}
#center{display:flex;flex-direction:column;align-items:center;gap:18px;width:100%;}
.media{position:relative;width:min(960px,90vw);aspect-ratio:16/9;background:radial-gradient(circle at 50% 28%, #46376e 0%, #2a2342 45%, #16121f 100%);box-shadow:var(--nm-in-lg);border:none;border-radius:16px;overflow:hidden;display:flex;align-items:center;justify-content:center;flex:0 0 auto;}
.media-box{width:100%;height:100%;display:flex;align-items:center;justify-content:center;overflow:hidden;}
.media-box img,.media-box video{width:100%;height:100%;object-fit:cover;display:block;}
.chars{position:absolute;inset:0;z-index:2;pointer-events:none;overflow:hidden;}
.char{position:absolute;bottom:4%;left:50%;transform:translateX(-50%);height:50%;max-width:62%;width:auto;object-fit:contain;filter:drop-shadow(0 4px 10px rgba(0,0,0,.5));}
.media .ph{color:var(--muted);font-size:14px;}
.ad-row{width:min(1200px,96vw);display:flex;gap:14px;flex-wrap:wrap;justify-content:center;flex:0 0 auto;}
.ad-banner{display:none;position:relative;flex:1 1 0;min-width:280px;height:64px;border-radius:10px;overflow:hidden;text-decoration:none;background:linear-gradient(90deg,#8a6bff,#22d3ee);}
.ad-banner.show{display:block;}
.ad-banner img{width:100%;height:100%;object-fit:cover;display:block;position:relative;z-index:1;}
.ad-fallback{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;color:#fff;font-size:14px;font-weight:700;letter-spacing:2px;padding:0 14px;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;z-index:0;}
.dock{width:min(860px,92vw);display:flex;flex-direction:column;align-items:center;gap:12px;padding:0;}
.hud{position:absolute;left:10px;top:10px;display:flex;gap:8px;flex-wrap:wrap;justify-content:flex-start;z-index:5;max-width:90%;}
.chip{background:var(--bg);box-shadow:var(--nm-in-sm);border:none;border-radius:999px;padding:5px 12px;font-size:13px;display:flex;gap:6px;align-items:center;}
.chip .ck{color:var(--muted);} .chip .cv{color:var(--accent-2);font-weight:700;}
.caption{position:absolute;left:0;right:0;bottom:0;z-index:6;background:transparent;border:none;text-align:center;padding:18px 16px 20px;color:var(--text);text-shadow:0 1px 6px rgba(0,0,0,.65);}
.speaker{color:var(--accent);font-weight:700;font-size:15px;margin-bottom:8px;}
.text{font-size:17px;line-height:1.75;white-space:pre-wrap;min-height:1.2em;}
.text.typing::after{content:'\25AC';display:inline-block;margin-left:1px;color:#b79bff;animation:tw-blink .8s steps(1) infinite;vertical-align:-1px;}
@keyframes tw-blink{50%{opacity:0;}}
.caption.skip-hint{cursor:pointer;}
.choices{width:min(860px,92vw);display:flex;flex-direction:column;align-items:center;gap:10px;}
.choice{width:100%;background:var(--bg);box-shadow:var(--nm-out-sm);border:none;border-radius:12px;padding:14px 18px;color:var(--text);font-size:15px;text-align:center;cursor:pointer;transition:.15s;}
.choice:hover{box-shadow:var(--nm-out);color:#fff;}
.choice:active{box-shadow:var(--nm-in-sm);}
.end{width:100%;text-align:center;color:var(--muted);font-size:16px;padding:14px;letter-spacing:2px;}
.audio{display:flex;align-items:center;justify-content:center;gap:10px;flex-wrap:wrap;}
.vid-ctl{display:flex;justify-content:center;}
.vid-ctl.hidden{display:none;}
.vid-replay{background:var(--bg);box-shadow:var(--nm-out-sm);border:none;border-radius:10px;padding:10px 18px;color:var(--text);font-size:14px;cursor:pointer;transition:.15s;}
.vid-replay:hover{box-shadow:var(--nm-out);}
.audio.hidden{display:none;}
.aud-btn{background:var(--bg);box-shadow:var(--nm-out-sm);border:none;border-radius:8px;padding:7px 13px;cursor:pointer;color:var(--text);font-size:13px;transition:.15s;}
.aud-btn:hover{box-shadow:var(--nm-out);color:#fff;}
.aud-label{color:var(--muted);font-size:13px;}
.ending{position:fixed;inset:0;background:rgba(6,9,14,.93);display:flex;align-items:center;justify-content:center;z-index:50;}
.ending.hidden{display:none;}
.end-card{text-align:center;background:var(--bg);box-shadow:var(--nm-out-lg);border:none;border-radius:20px;padding:40px 56px;}
.end-emoji{font-size:46px;margin-bottom:8px;}
.end-title{font-size:22px;font-weight:700;letter-spacing:4px;margin-bottom:8px;}
.end-sub{color:var(--muted);margin-bottom:22px;}
.big-btn{background:var(--grad);color:#fff;border:none;border-radius:10px;padding:12px 26px;font-size:15px;cursor:pointer;}
.big-btn:hover{filter:brightness(1.1);}
.start-screen{display:none;}
@media(max-width:560px){#floatbar{right:8px;top:auto;bottom:14px;transform:none;flex-direction:row;}#floatBtns{flex-direction:row;}#floatBtns button{padding:8px 11px;font-size:12px;}.caption,.media,.choices{width:100%;}}
PLAYER_CSS_EOF
  );

  define('PLAYER_SKELETON', <<<'PLAYER_SKELETON_EOF'
<div id="stage">
  <div id="adRow" class="ad-row">
    <a class="ad-banner" data-ad="0" target="_blank" rel="noopener noreferrer"></a>
    <a class="ad-banner" data-ad="1" target="_blank" rel="noopener noreferrer"></a>
  </div>
  <div id="center">
    <div id="media" class="media">
      <div id="mediaBox" class="media-box"></div>
      <div id="chars" class="chars"></div>
      <div id="hud" class="hud"></div>
      <div id="caption" class="caption">
        <div id="speaker" class="speaker"></div>
        <div id="text" class="text"></div>
      </div>
    </div>
    <div class="dock">
      <div id="audioBar" class="audio hidden">
        <button id="audToggle" class="aud-btn">&#9654; 播放旁白</button>
        <button id="audReplay" class="aud-btn">&#8635; 重听</button>
        <span class="aud-label">&#128266; 该对话配有旁白</span>
      </div>
      <div id="vidCtl" class="vid-ctl hidden"><button id="vidReplay" class="vid-replay">&#8635; 重播视频</button></div>
      <div id="choices" class="choices"></div>
    </div>
    <audio id="aud" preload="auto"></audio>
  </div>
</div>
<div id="floatbar">
  <div id="floatBtns">
    <button id="btnBack">&larr; 返回</button>
    <button id="btnRestart">&#8635; 重玩</button>
    <button id="btnExit">&#10005; 结束</button>
  </div>
</div>
<div id="ending" class="ending hidden">
  <div class="end-card">
    <div class="end-emoji">&#128214;</div>
    <div class="end-title">—— 剧终 ——</div>
    <div class="end-sub" id="endSub"></div>
    <button id="endRestart" class="big-btn">&#8635; 重新开始</button>
  </div>
</div>
PLAYER_SKELETON_EOF
  );

  define('PLAYER_BOOTSTRAP_SRC', <<<'PLAYER_BOOTSTRAP_EOF'
function playerBootstrap() {
    "use strict";
    var story = window.STORY;
    function getVar(id){ for(var i=0;i<story.variables.length;i++) if(story.variables[i].id===id) return story.variables[i]; return null; }
    function getScene(id){ for(var i=0;i<story.scenes.length;i++) if(story.scenes[i].id===id) return story.scenes[i]; return null; }
    function esc(s){ return String(s==null?"":s).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;"); }
    function coerce(v,t){ if(t==="number") return Number(v)||0; if(t==="bool") return (v===true||v==="true"); return String(v==null?"":v); }

    // 打字机（视觉小说招牌效果）
    var twTimer=null, twFull="", twDone=null;
    function typeText(txt, done){
      if(twTimer){ clearInterval(twTimer); twTimer=null; }
      twFull=txt||""; twDone=done||null;
      textEl.classList.add("typing");
      if(!twFull){ textEl.textContent=""; textEl.classList.remove("typing"); finishTw(); return; }
      var i=0; textEl.textContent="";
      twTimer=setInterval(function(){ i++; textEl.textContent=twFull.slice(0,i); if(i>=twFull.length){ clearInterval(twTimer); twTimer=null; textEl.classList.remove("typing"); finishTw(); } }, 22);
    }
    function finishTw(){ var cb=twDone; twDone=null; if(cb) cb(); }
    function skipTw(){ if(!twTimer) return; clearInterval(twTimer); twTimer=null; textEl.textContent=twFull; textEl.classList.remove("typing"); finishTw(); }

    var state = {};
    var stack = [];
    function initState(){ state={}; (story.variables||[]).forEach(function(v){ state[v.id]=coerce(v.init,v.type); }); renderState(); }
    function applyEffects(ch){ if(!ch.effects) return; ch.effects.forEach(function(ef){ var v=getVar(ef.varId); if(!v) return; var cur=state[ef.varId]; if(ef.op==="set") state[ef.varId]=coerce(ef.value,v.type); else if(ef.op==="add") state[ef.varId]=(Number(cur)||0)+(Number(ef.value)||0); else if(ef.op==="sub") state[ef.varId]=(Number(cur)||0)-(Number(ef.value)||0); else if(ef.op==="toggle") state[ef.varId]=!cur; }); renderState(); }
    function condMet(c){ if(!c||!c.varId) return true; var v=getVar(c.varId); if(!v) return true; var cur=state[c.varId], cmp=c.cmp||"==", val=c.value; if(cmp==="truthy") return !!cur; if(v.type==="number"){ var a=Number(cur)||0,b=Number(val)||0; if(cmp==="==")return a===b; if(cmp==="!=")return a!==b; if(cmp===">")return a>b; if(cmp===">=")return a>=b; if(cmp==="<")return a<b; if(cmp==="<=")return a<=b; return true; } if(v.type==="bool"){ var bv=(val===true||val==="true"); if(cmp==="==")return !!cur===bv; if(cmp==="!=")return !!cur!==bv; return !!cur; } var s=String(cur==null?"":cur),t=String(val==null?"":val); if(cmp==="==")return s===t; if(cmp==="!=")return s!==t; if(cmp===">")return s>t; if(cmp==="<")return s<t; return true; }
    function renderState(){ var el=document.getElementById("hud"); var vars=story.variables||[]; if(!vars.length){ el.style.display="none"; el.innerHTML=""; return; } el.style.display="flex"; var h=""; for(var i=0;i<vars.length;i++){ var v=vars[i],val=state[v.id]; var disp=v.type==="bool"?(val?"开":"关"):(val==null?"":String(val)); h+='<span class="chip"><span class="ck">'+esc(v.name)+'</span><span class="cv">'+esc(disp)+'</span></span>'; } el.innerHTML=h; }

    var mediaEl=document.getElementById("mediaBox"), speakerEl=document.getElementById("speaker"), textEl=document.getElementById("text"), choicesEl=document.getElementById("choices");
    var audioEl=document.getElementById("aud"), audioBar=document.getElementById("audioBar"), audToggle=document.getElementById("audToggle"), audReplay=document.getElementById("audReplay");
    var vidCtl=document.getElementById("vidCtl"), vidReplay=document.getElementById("vidReplay");
    function showScene(id){
      var sc=getScene(id); if(!sc) return;
      if(sc.media && sc.media.type!=="none" && sc.media.src){
        if(sc.media.type==="image") mediaEl.innerHTML='<img src="'+esc(sc.media.src)+'" alt="">';
        else if(sc.media.type==="video") mediaEl.innerHTML='<video src="'+esc(sc.media.src)+'" autoplay playsinline></video>';
        if(sc.media.type==="video"){ var v=mediaEl.querySelector("video"); if(v && vidCtl){ vidCtl.classList.remove("hidden"); vidReplay.style.display="none"; v.addEventListener("ended",function(){ vidReplay.style.display=""; }); vidReplay.onclick=function(){ v.currentTime=0; v.play().catch(function(){}); vidReplay.style.display="none"; }; } }
        else if(vidCtl){ vidCtl.classList.add("hidden"); }
      } else { mediaEl.innerHTML='<div class="ph">（无背景）</div>'; if(vidCtl) vidCtl.classList.add("hidden"); }
      var charsEl=document.getElementById("chars");
      if(charsEl){ var chs=(sc.characters||[]), chh=""; for(var ci=0;ci<chs.length;ci++){ var cc=chs[ci]; chh+='<img class="char" src="'+esc(cc.src)+'" alt="" style="left:'+(cc.x!=null?cc.x:50)+'%;height:'+((cc.scale||0.5)*100)+'%">'; } charsEl.innerHTML=chh; }
      speakerEl.textContent=sc.speaker||""; speakerEl.style.display=sc.speaker?"block":"none";
      // 先清空选项，等打字机完成后再渲染
      choicesEl.innerHTML="";
      // audio narration
      if(sc.audio && sc.audio.src){
        audioBar.classList.remove("hidden");
        audioEl.pause(); audioEl.src=sc.audio.src;
        function upd(){ audToggle.innerHTML = audioEl.paused ? "&#9654; 播放旁白" : "&#10073;&#10073; 暂停"; }
        audToggle.onclick=function(){ if(audioEl.paused){ audioEl.play().catch(function(){}); } else { audioEl.pause(); } upd(); };
        audReplay.onclick=function(){ audioEl.currentTime=0; audioEl.play().catch(function(){}); upd(); };
        audioEl.onended=upd; audioEl.onplay=upd; audioEl.onpause=upd;
        if(sc.audio.autoplay!==false){ audioEl.play().then(upd).catch(upd); } else { upd(); }
      } else {
        audioEl.pause(); audioBar.classList.add("hidden");
      }
      // 打字机逐字显示台词，完成后渲染选项（点击画面可跳过）
      typeText(sc.text||"", function(){ renderChoices(); });
      function renderChoices(){
        choicesEl.innerHTML="";
        var active=sc.choices.filter(function(c){ return c.target && condMet(c.cond); });
        if(active.length===0){
          var end=document.createElement("div"); end.className="end";
          var had=sc.choices.some(function(c){return c.target;});
          end.textContent=had?"（当前条件不满足，剧情结束）":"—— 剧终 ——";
          choicesEl.appendChild(end);
        } else {
          active.forEach(function(ch){
            var b=document.createElement("button"); b.className="choice"; b.textContent=ch.label||"（继续）";
            b.addEventListener("click",function(){ stack.push(id); applyEffects(ch); showScene(ch.target); });
            choicesEl.appendChild(b);
          });
        }
      }
    }
    function showEnding(){ audioEl.pause(); var e=document.getElementById("ending"); if(e){ document.getElementById("endSub").textContent="感谢游玩《"+(story.name||"视觉小说")+"》"; e.classList.remove("hidden"); } }
    function hideEnding(){ var e=document.getElementById("ending"); if(e) e.classList.add("hidden"); }

    var titleEl=document.getElementById("title"); if(titleEl) titleEl.textContent=story.name||"视觉小说";
    var ads=story.ads||[], adBanners=document.querySelectorAll("#adRow .ad-banner");
    for(var ai=0;ai<adBanners.length;ai++){ var ax=ads[ai]; var b=adBanners[ai];
      if(ax && ax.url){ b.href=ax.url; b.target="_blank"; b.rel="noopener noreferrer"; b.classList.add("show");
        if(ax.src){ b.innerHTML='<img src="'+esc(ax.src)+'" alt="" onerror="this.style.display=\'none\'"><span class="ad-fallback">'+esc(ax.url)+'</span>'; }
        else { b.innerHTML='<span class="ad-fallback">广告位</span>'; }
      }
    }
    document.getElementById("btnBack").addEventListener("click",function(){ if(stack.length) showScene(stack.pop()); });
    document.getElementById("btnRestart").addEventListener("click",function(){ hideEnding(); stack=[]; initState(); showScene(story.start); });
    document.getElementById("btnExit").addEventListener("click",showEnding);
    document.getElementById("endRestart").addEventListener("click",function(){ hideEnding(); stack=[]; initState(); showScene(story.start); });

    // Auto-hide the control bar: hidden by default for a clean view, revealed on
    // mouse move / touch, then fades out after a short idle period.
    var floatbar=document.getElementById("floatbar"), hideTimer=null;
    function revealControls(){ if(floatbar) floatbar.classList.add("show"); if(hideTimer) clearTimeout(hideTimer); hideTimer=setTimeout(function(){ if(floatbar) floatbar.classList.remove("show"); }, 2600); }
    document.addEventListener("mousemove", revealControls);
    document.addEventListener("touchstart", revealControls, { passive:true });
    document.addEventListener("keydown", revealControls);
    revealControls();

    // Safety net: if a browser still blocks the start-gesture autoplay, resume
    // the narration on the first interaction inside the stage.
    document.getElementById("stage").addEventListener("pointerdown",function(){ if(audioEl && audioEl.paused && audioEl.src && (getScene(stack[stack.length-1]||story.start)||{}).audio) audioEl.play().catch(function(){}); }, { once:true });
    // 点击画面（非按钮）跳过打字机，立即显示完整台词与选项
    document.getElementById("stage").addEventListener("click",function(e){ if(e.target && e.target.closest && e.target.closest("button")) return; if(twTimer) skipTw(); });

    initState();
    showScene(story.start);
  }
PLAYER_BOOTSTRAP_EOF
  );

  function _pb_get_scene($p, $id) {
    if (empty($p['scenes'])) return null;
    foreach ($p['scenes'] as $sc) { if ($sc['id'] === $id) return $sc; }
    return null;
  }

  /* Build a standalone, double-clickable HTML player.
     Returns '' when no start scene is set (caller should guard). */
  function build_player_html($project) {
    if (empty($project['start']) || !_pb_get_scene($project, $project['start'])) {
      return '';
    }
    $title = isset($project['name']) ? $project['name'] : '视觉小说';
    // Exported works intentionally carry NO ads: ads:[] keeps banners hidden.
    $export = array_merge($project, array('ads' => array()));
    $json = str_replace('<', '\\u003c', json_encode($export, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    return "<!DOCTYPE html>\n<html lang=\"zh-CN\">\n<head>\n<meta charset=\"UTF-8\">\n"
      . "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"
      . "<title>" . htmlspecialchars($title, ENT_COMPAT, 'UTF-8') . " · 视觉小说</title>\n"
      . "<style>\n" . PLAYER_CSS . "\n</style>\n</head>\n<body>\n"
      . PLAYER_SKELETON . "\n"
      . "<script>var STORY=" . $json . ";</script>\n"
      . "<script>(" . PLAYER_BOOTSTRAP_SRC . ")();</script>\n"
      . "</body>\n</html>";
  }
}
