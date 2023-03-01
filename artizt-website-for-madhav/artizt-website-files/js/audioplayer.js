function htmlEncode(c) {
  return jQuery("<div/>").text(c).html();
}
function htmlDecode(c) {
  return jQuery("<div/>").html(arg).text();
}
var dzsap_list = [],
  dzsap_ytapiloaded = !1,
  dzsap_globalidind = 20,
  dzsap_list_for_sync_players = [],
  dzsap_list_for_sync_sw_build = !1,
  dzsap_list_for_sync_inter_build = 0;
window.dzsap_audio_ctx = null;
window.dzsap_self_options = {};
(function (c) {
  window.dzsap_list_for_sync_build = function () {};
  c.fn.prependOnce = function (a, m) {
    var y = c(this);
    if ("undefined" == typeof m) {
      var z = /class="(.*?)"/.exec(a);
      "undefined" != typeof z[1] && (m = "." + z[1]);
    }
    return 1 > y.children(m).length ? (y.prepend(a), !0) : !1;
  };
  c.fn.appendOnce = function (a, m) {
    var y = c(this);
    if ("undefined" == typeof m) {
      var z = /class="(.*?)"/.exec(a);
      "undefined" != typeof z[1] && (m = "." + z[1]);
    }
    return 1 > y.children(m).length ? (y.append(a), !0) : !1;
  };
  c.fn.audioplayer = function (a) {
    if (
      "undefined" == typeof a &&
      "undefined" != typeof c(this).attr("data-options") &&
      "" != c(this).attr("data-options")
    ) {
      var m = c(this).attr("data-options"),
        m = "window.dzsap_self_options  = " + m;
      eval(m);
      a = c.extend({}, window.dzsap_self_options);
      window.window.dzsap_self_options = c.extend({}, {});
    }
    a = c.extend(
      {
        design_skin: "skin-default",
        autoplay: "off",
        cue: "on",
        loop: "off",
        swf_location: "ap.swf",
        swffull_location: "apfull.swf",
        settings_backup_type: "light",
        settings_extrahtml: "",
        settings_extrahtml_in_float_left: "",
        settings_extrahtml_in_float_right: "",
        settings_trigger_resize: "0",
        design_thumbh: "default",
        design_thumbw: "200",
        disable_volume: "default",
        disable_scrub: "default",
        disable_player_navigation: "off",
        disable_timer: "default",
        type: "audio",
        embed_code: "",
        skinwave_dynamicwaves: "off",
        soundcloud_apikey: "",
        parentgallery: null,
        skinwave_enableSpectrum: "off",
        skinwave_enableReflect: "on",
        settings_useflashplayer: "auto",
        skinwave_spectrummultiplier: "1",
        settings_php_handler: "",
        php_retriever: "soundcloudretriever.php",
        skinwave_mode: "normal",
        skinwave_wave_mode: "normal",
        skinwave_wave_mode_canvas_waves_number: "250",
        skinwave_wave_mode_canvas_waves_padding: "1",
        skinwave_wave_mode_canvas_reflection_size: "0.25",
        pcm_data_try_to_generate: "off",
        skinwave_comments_links_to: "",
        skinwave_comments_enable: "off",
        skinwave_comments_playerid: "",
        skinwave_comments_account: "none",
        skinwave_comments_process_in_php: "off",
        skinwave_comments_retrievefromajax: "off",
        skinwave_comments_displayontime: "on",
        skinwave_comments_avatar:
          "http://www.gravatar.com/avatar/00000000000000000000000000000000?s=20",
        skinwave_comments_allow_post_if_not_logged_in: "on",
        skinwave_timer_static: "off",
        skinwave_spectrum_wavesbg: "4f4949",
        skinwave_spectrum_wavesprog: "ae1919",
        default_volume: "1",
        volume_from_gallery: "",
        design_menu_show_player_state_button: "off",
        playfrom: "off",
        scrubbar_tweak_overflow_hidden: "off",
        design_animateplaypause: "default",
        embedded: "off",
        embedded_iframe_id: "",
        sample_time_start: "0",
        sample_time_end: "0",
        sample_time_total: "0",
        google_analytics_send_play_event: "off",
        fakeplayer: null,
        type_for_fake_feed: "",
        failsafe_repair_media_element: "",
        action_audio_play: null,
        action_audio_play2: null,
        action_audio_end: null,
        action_audio_comment: null,
        action_audio_loaded_metadata: null,
        type_audio_stop_buffer_on_unfocus: "off",
        construct_player_list_for_sync: "off",
        settings_exclude_from_list: "off",
        design_color_bg: "222222",
        design_color_highlight: "ea8c52",
      },
      a
    );
    this.each(function () {
      function y(a, b) {
        var l = {};
        b && c.extend(l, b);
        Z = a;
      }
      function z(d) {
        a.design_color_highlight = d;
        "canvas" == a.skinwave_wave_mode &&
          (u(La.get(0), b.attr("data-pcm"), "#" + a.design_color_bg),
          u(Ya.get(0), b.attr("data-pcm"), "#" + a.design_color_highlight));
      }
      function F(d, g) {
        var l = { type: "", fakeplayer_is_feeder: "off", call_from: "default" };
        ha = "on";
        var e = 500;
        g && (l = c.extend(l, g));
        Z && Z.get(0).api_pause_media_visual();
        "on" == l.fakeplayer_is_feeder ? (Z = d) : ((Z = null), (Za = d));
        if (b.attr("data-source") == d.attr("data-source")) return !1;
        b.parent().hasClass("audioplayer-was-loaded") &&
          (b.parent().addClass("audioplayer-loaded"),
          b.parent().removeClass("audioplayer-was-loaded"));
        b.removeClass("errored-out");
        R();
        b.attr("data-source", d.attr("data-source"));
        l.type &&
          ("soundcloud" == l.type && (l.type = "audio"),
          "album_part" == l.type && (l.type = "audio"),
          b.attr("data-type", l.type),
          (t = l.type),
          (a.type = l.type));
        $a = !1;
        "skin-wave" == a.design_skin &&
          "small" == a.skinwave_mode &&
          (b.addClass("transitioning-change-media"),
          0 < d.find(".meta-artist").length &&
            ((l = 0),
            A && A.offset() && (l = A.offset().left - b.offset().left - 13),
            A.css({ position: "absolute", top: "16px", left: l + "px" }),
            A.animate({ top: "-50px", opacity: "0" }, { duration: 300 }),
            0 < b.find(".the-thumb-con").length &&
              b.find(".the-thumb-con").addClass("transitioning-out"),
            J.append(
              '<div class="meta-artist-con transitioning" style="top:55px;"><div class="meta-artist">' +
                d.find(".meta-artist").eq(0).html() +
                "</div></div>"
            ),
            b
              .find(".meta-artist-con.transitioning")
              .eq(0)
              .animate(
                { top: "18px" },
                {
                  duration: 300,
                  complete: function () {
                    c(this).css("top", "");
                    c(this).removeClass("transitioning");
                    A = c(this);
                  },
                }
              )),
          d.attr("data-thumb") &&
            (0 < b.find(".the-thumb-con").length &&
              b.find(".the-thumb-con").addClass("transitioning-out"),
            b
              .find(".the-thumb-con.transitioning-out")
              .css({ position: "absolute", top: "0px", left: "0px" }),
            b
              .find(".the-thumb-con.transitioning-out")
              .animate({ top: "-80px" }, { duration: 500 }),
            (l = ""),
            (l = d.attr("data-thumb_link")
              ? l + ('<a href="' + d.attr("data-thumb_link") + '"')
              : l + "<div"),
            (l +=
              ' class="the-thumb-con" style="top: 80px;"><div class="the-thumb" style="width: 80px;  background-image:url(' +
              d.attr("data-thumb") +
              ')"></div>'),
            (l = d.attr("data-thumb_link") ? l + "</a>" : l + "</div>"),
            J.prepend(l),
            b
              .find(".the-thumb-con")
              .eq(0)
              .animate({ top: "0" }, { duration: 700 })),
          "canvas" == a.skinwave_wave_mode
            ? ((Ma = d.attr("data-source")),
              d.attr("data-pcm")
                ? (ab(d.attr("data-pcm")),
                  b.attr("data-pcm", d.attr("data-pcm")))
                : bb({ call_from: "hmm_canvas" }))
            : 0 < b.find(".scrub-bg").length &&
              d.attr("data-scrubbg") &&
              (b
                .find(
                  ".scrub-bg,.scrub-prog,.scrub-bg-reflect,.scrub-prog-reflect"
                )
                .animate({ opacity: 0 }, { duration: 500 }),
              (l =
                '<div class="scrub-bg is-new" style="opacity: 0;"></div><div class="scrub-buffer"></div><div class="scrub-prog is-new"  style="opacity: 0;"></div>'),
              "skin-wave" == a.design_skin &&
                "on" == a.skinwave_enableReflect &&
                (l +=
                  '<div class="scrub-bg-reflect is-new" style="opacity: 0;"></div><div class="scrub-prog-reflect is-new" style="opacity: 0;"></div>'),
              cb &&
                (l +=
                  '<div class="sample-block-start is-new" style="width: ' +
                  100 * cb +
                  '%"></div>'),
              za &&
                (l +=
                  '<div class="sample-block-end is-new" style="left: ' +
                  100 * za +
                  "%; width: " +
                  (100 - 100 * za) +
                  '%"></div>'),
              n.children(".total-time").before(l),
              d.attr("data-scrubbg") &&
                n
                  .children(".scrub-bg.is-new")
                  .append(
                    '<img class="scrub-bg-img" src="' +
                      d.attr("data-scrubbg") +
                      '"/>'
                  ),
              d.attr("data-scrubprog") &&
                n
                  .children(".scrub-prog.is-new")
                  .eq(0)
                  .append(
                    '<img class="scrub-prog-img" src="' +
                      d.attr("data-scrubprog") +
                      '"/>'
                  ),
              n.find(".scrub-bg-img").css({}),
              n
                .find(".scrub-prog-img")
                .css({ width: n.children(".scrub-bg.is-new").width() }),
              "on" == a.skinwave_enableReflect &&
                (n
                  .children(".scrub-bg-reflect.is-new")
                  .eq(0)
                  .append(
                    '<img class="scrub-bg-img-reflect" src="' +
                      d.attr("data-scrubbg") +
                      '"/>'
                  ),
                void 0 != b.attr("data-scrubprog") &&
                  n
                    .children(".scrub-prog-reflect.is-new")
                    .eq(0)
                    .append(
                      '<img class="scrub-prog-img-reflect" src="' +
                        d.attr("data-scrubprog") +
                        '"/>'
                    ),
                n
                  .find(".scrub-bg-img")
                  .css({ "transform-origin": "100% 100%" }),
                n
                  .find(".scrub-prog-img")
                  .css({ "transform-origin": "100% 100%" }),
                n
                  .find(".scrub-prog-img-reflect")
                  .css({ width: n.children(".scrub-bg.is-new").width() })),
              setTimeout(function () {
                b.find(".scrub-bg.is-new,.scrub-prog.is-new").animate(
                  { opacity: 1 },
                  { duration: 500, queue: !1 }
                );
                b.find(
                  ".scrub-bg-reflect.is-new,.scrub-prog-reflect.is-new"
                ).animate({ opacity: 0.5 }, { duration: 500, queue: !1 });
              }, 100)),
          setTimeout(function () {
            1 < b.find(".meta-artist-con").length &&
              (b.find(".meta-artist-con").eq(0).remove(),
              (A = b.find(".meta-artist-con").eq(0)));
            1 < b.find(".the-thumb-con").length &&
              (b.find(".the-thumb-con").eq(1).remove(),
              b.find(".the-thumb-con").eq(0));
            "canvas" != a.skinwave_wave_mode &&
              (n.find(".scrub-bg:not(.is-new)").remove(),
              n.find(".scrub-prog:not(.is-new)").remove());
            n.find(".scrub-bg-reflect:not(.is-new)").remove();
            n.find(".scrub-prog-reflect:not(.is-new)").remove();
            n.find(".is-new").removeClass("is-new");
            b.removeClass("transitioning-change-media");
          }, 900));
        if ("skin-silver" == a.design_skin) {
          l = 0;
          A && 0 < A.length
            ? ((l = A.offset().left - b.offset().left - 13),
              A.css({ position: "absolute", top: "0px", left: l + "px" }),
              A.animate({ top: "-50px", opacity: "0" }, { duration: 300 }))
            : (l = 0);
          d.find(".meta-artist");
          var f = (e = "");
          d.find(".meta-artist").eq(0).html() &&
            (e = d.find(".meta-artist").eq(0).html());
          d.attr("data-thumb") &&
            (0 < b.find(".the-thumb-con").length &&
              b.find(".the-thumb-con").addClass("transitioning-out"),
            (f +=
              '<div class="the-thumb-con" style=""><div class="the-thumb" style="  background-image:url(' +
              d.attr("data-thumb") +
              ')"></div></div>'));
          b.addClass("transitioning-change-media");
          aa.append(
            '<div class="meta-artist-con transitioning" style="top:55px;">' +
              f +
              '<div class="meta-artist">' +
              e +
              "</div></div>"
          );
          0 == l &&
            (l =
              b.width() -
              aa.find(".meta-artist-con.transitioning").last().width());
          b.find(".meta-artist-con")
            .last()
            .css({ top: "50px", position: "relative" });
          b.find(".meta-artist-con")
            .last()
            .animate({ top: "0px" }, { duration: 500 });
          setTimeout(function () {
            1 < b.find(".meta-artist-con").length &&
              b.find(".meta-artist-con").eq(0).remove();
            A = b.find(".meta-artist-con").eq(0);
            A.css({ position: "relative", left: "0" });
            b.removeClass("transitioning-change-media");
          }, 900);
        }
        e = 100;
        d.find(".meta-artist").eq(0).html();
        M();
        if ("fake" == t) return !1;
        setTimeout(function () {
          ca();
        }, 500);
        setTimeout(function () {
          oa();
        }, e);
      }
      function ia() {
        for (S = 0; S < db.length; S++) E && null != db[S] && E.append(db[S]);
      }
      function p() {
        if (eb) return !1;
        Tb = !0;
      }
      function Aa() {
        if (eb) return !1;
        pa && Ba();
        b.remove();
        b = null;
        eb = !0;
      }
      function ka(a, g) {
        var l = { do_not_autoplay: !1 };
        g && (l = c.extend(l, g));
        b.find(".playbtn").unbind("click", ka);
        b.find(".scrubbar").unbind("click", ka);
        M(l);
        (is_android() || is_ios()) && ca();
      }
      function Na(b) {
        a.parentgallery &&
          "undefined" != typeof a.parentgallery.get(0) &&
          a.parentgallery.get(0).api_toggle_menu_state();
      }
      function Oa(d) {
        var g = c(this),
          l = parseInt(d.clientX, 10) - g.offset().left;
        fb = (l / g.width()) * 100 + "%";
        htmlEncode("");
        if (!a.skinwave_comments_links_to) {
          if (
            "off" == a.skinwave_comments_allow_post_if_not_logged_in &&
            "none" == a.skinwave_comments_account
          )
            return !1;
          var e = !0;
          E.children().each(function () {
            var a = c(this);
            if (
              !a.hasClass("placeholder") &&
              !a.hasClass("the-bg") &&
              ((a = a.offset().left - g.offset().left), 20 > Math.abs(a - l))
            )
              return E.find(".dzstooltip-con.placeholder").remove(), (e = !1);
          });
          if (!e) return !1;
          0 == qa.hasClass("active") &&
            (qa.css({
              height:
                qa.find(".comments-writer-inner").eq(0).outerHeight() + 20,
            }),
            qa.addClass("active"),
            b.addClass("comments-writer-active"),
            a.parentgallery &&
              void 0 != c(a.parentgallery).get(0) &&
              void 0 != c(a.parentgallery).get(0).api_handleResize &&
              c(a.parentgallery).get(0).api_handleResize());
          "none" != a.skinwave_comments_account &&
            b.find("input[name=comment-email]").remove();
          E.find(".dzstooltip-con.placeholder").remove();
          E.append(
            '<span class="dzstooltip-con placeholder" style="left:' +
              fb +
              ';"><div class="the-avatar" style="background-image: url(' +
              a.skinwave_comments_avatar +
              ')"></div></span>'
          );
        }
      }
      function h(a) {
        e();
      }
      function f(d) {
        if (0 < b.find("input[name=comment-email]").length) {
          if (
            0 ==
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
              b.find("input[name=comment-email]").eq(0).val()
            )
          )
            return (
              alert(
                "please insert email, your email is just used for gravatar. it will not be sent or stored anywhere"
              ),
              !1
            );
          d = String(b.find("input[name=comment-email]").eq(0).val()).split(
            "@"
          )[0];
          a.skinwave_comments_account = d;
          a.skinwave_comments_avatar =
            "https://secure.gravatar.com/avatar/" +
            MD5(
              String(
                b.find("input[name=comment-email]").eq(0).val()
              ).toLowerCase()
            ) +
            "?s=20";
        }
        d = a.skinwave_comments_account;
        var g = "";
        "on" != a.skinwave_comments_process_in_php
          ? ((g +=
              '<span class="dzstooltip-con" style="left:' +
              fb +
              '"><span class="dzstooltip arrow-from-start transition-slidein arrow-bottom skin-black" style="width: 250px;"><span class="the-comment-author">@' +
              d +
              "</span> says:<br>"),
            (g += htmlEncode(b.find("*[name=comment-text]").eq(0).val())),
            (g +=
              '</span><div class="the-avatar" style="background-image: url(' +
              a.skinwave_comments_avatar +
              ')"></div></span>'))
          : (g += b.find("*[name=comment-text]").eq(0).val());
        b.find("*[name=comment-text]").eq(0).val("");
        T(g);
        e();
        a.parentgallery &&
          void 0 != c(a.parentgallery).get(0) &&
          void 0 != c(a.parentgallery).get(0).api_player_commentSubmitted &&
          c(a.parentgallery).get(0).api_player_commentSubmitted();
        return !1;
      }
      function e() {
        b.removeClass("comments-writer-active");
        E.find(".dzstooltip-con.placeholder").remove();
        qa.removeClass("active");
        qa.css({ height: 0 });
        a.parentgallery &&
          void 0 != c(a.parentgallery).get(0) &&
          void 0 != c(a.parentgallery).get(0).api_handleResize &&
          c(a.parentgallery).get(0).api_handleResize();
      }
      function k() {
        1 != $a &&
          (q = new YT.Player("ytplayer_" + N + "", {
            height: "200",
            width: "200",
            videoId: b.attr("data-source"),
            playerVars: { origin: "" },
            events: { onReady: Ca, onStateChange: ob },
          }));
      }
      function Ca(a) {
        ra();
      }
      function ob(a) {}
      function bb(a) {
        var g = { call_from: "default" };
        a && (g = c.extend(g, a));
        console.info("init_generate_wave_data", g);
        console.info("init_generate_wave_data", b.attr("data-source"));
        if (window.WaveSurfer)
          console.info("wavesurfer already loaded"),
            pb({ call_from: "wavesurfer already loaded" });
        else {
          g = document.getElementsByTagName("script");
          a = "";
          for (var l in g) if (-1 < g[l].src.indexOf("audioplayer.js")) break;
          l = String(g[l].src).split("/");
          for (g = 0; g < l.length - 1; g++) a += l[g] + "/";
          a += "wavesurfer.js";
          b.addClass("errored-out");
          b.append(
            '<div class="feedback-text pcm-notice">please wait while pcm data is generated.. </div>'
          );
          c.ajax({
            url: a,
            dataType: "script",
            success: function (a) {
              pb({ call_from: "load_script" });
            },
          });
        }
      }
      function pb(d) {
        var g = { call_from: "default" };
        d && c.extend(g, d);
        console.info("margs - ", g);
        console.info(" generate_wave_data()", Ma);
        d = "wavesurfer" + Math.ceil(1e3 * Math.random());
        b.append('<div id="' + d + '" class="hidden"></div>');
        var l = WaveSurfer.create({ container: "#" + d, normalize: !0 });
        0 != String(b.attr("data-source")).indexOf("https://soundcloud.com") &&
          "fake" != b.attr("data-source") &&
          (String(b.attr("data-source")).indexOf("https://api.soundcloud.com"),
          l.load(Ma),
          l.on("ready", function () {
            var d = l.exportPCM(512, 1e3, !0);
            b.attr("data-pcm", d);
            Za && Za.attr("data-pcm", d);
            b.find(".pcm-notice").fadeOut("fast");
            b.removeClass("errored-out");
            var g = B,
              e = null;
            (e = Za ? Za : Z ? Z : null) &&
              (e.attr("data-playerid")
                ? (g = e.attr("data-playerid"))
                : e.attr("data-source") && (g = e.attr("data-source")));
            "" == g && ((g = b.attr("data-source")), Db && (g = Db));
            console.info(" pcm_identifier- ", g);
            d = { action: "dzsap_submit_pcm", postdata: d, playerid: g };
            a.settings_php_handler &&
              c.ajax({
                type: "POST",
                url: a.settings_php_handler,
                data: d,
                success: function (a) {},
              });
          }),
          ab(b.attr("data-pcm")));
      }
      function ab(b) {
        n.find(".scrub-bg-img,.scrub-prog-img").addClass("transitioning-out");
        n.find(".scrub-bg-img,.scrub-prog-img").animate(
          { opacity: 0 },
          { queue: !1, duration: 300 }
        );
        r({ prepare_for_transition_in: !0 });
        Ya.width(n.find(".scrub-prog-img").width());
        u(La.get(0), b, "#" + a.design_color_bg);
        u(Ya.get(0), b, "#" + a.design_color_highlight);
        n.find(
          ".scrub-bg-img.transitioning-in,.scrub-prog-img.transitioning-in"
        ).animate(
          { opacity: 1 },
          {
            queue: !1,
            duration: 300,
            complete: function () {
              var a = c(this).parent();
              a.children(".transitioning-out").remove();
              a.children(".transitioning-in").removeClass("transitioning-in");
            },
          }
        );
        Eb = !0;
      }
      function Da() {
        b.append('<div class="audioplayer-inner"></div>');
        G = b.children(".audioplayer-inner");
        G.append('<div class="the-media"></div>');
        "skin-customcontrols" != a.design_skin &&
          G.append('<div class="ap-controls"></div>');
        X = G.children(".the-media").eq(0);
        da = G.children(".ap-controls").eq(0);
        var d, g;
        d =
          '<div class="scrubbar"><div class="scrub-bg"></div><div class="scrub-buffer"></div><div class="scrub-prog"></div><div class="scrubBox"></div><div class="scrubBox-prog"></div><div class="scrubBox-hover"></div>';
        "skin-wave" == a.design_skin &&
          "on" == a.skinwave_enableReflect &&
          (d +=
            '<div class="scrub-bg-reflect"></div><div class="scrub-prog-reflect"></div>');
        "skin-wave" == a.design_skin &&
          "on" != a.disable_timer &&
          (d +=
            '<div class="total-time">00:00</div><div class="curr-time">00:00</div>');
        cb &&
          (d +=
            '<div class="sample-block-start" style="width: ' +
            100 * cb +
            '%"></div>');
        za &&
          (d +=
            '<div class="sample-block-end" style="left: ' +
            100 * za +
            "%; width: " +
            (100 - 100 * za) +
            '%"></div>');
        d += "</div>";
        g =
          '<div class="con-controls"><div class="the-bg"></div><div class="con-playpause"><div class="playbtn"><div class="play-icon"></div><div class="play-icon-hover"></div></div><div class="pausebtn" style="display:none"><div class="pause-icon"><div class="pause-part-1"></div><div class="pause-part-2"></div></div><div class="pause-icon-hover"></div></div></div>';
        a.settings_extrahtml_in_float_left &&
          (g += a.settings_extrahtml_in_float_left);
        "skin-wave" != a.design_skin &&
          "on" != a.disable_timer &&
          (g +=
            '<div class="curr-time">00:00</div><div class="total-time">00:00</div>');
        if ("skin-default" == a.design_skin || "skin-wave" == a.design_skin)
          (g += '<div class="ap-controls-right">'),
            "on" != a.disable_volume &&
              (g +=
                '<div class="controls-volume"><div class="volumeicon"></div><div class="volume_static"></div><div class="volume_active"></div><div class="volume_cut"></div></div>'),
            a.settings_extrahtml_in_float_right &&
              (g += a.settings_extrahtml_in_float_right),
            (g += '</div><div class="clear"></div>');
        g += "</div>";
        if ("skin-wave" == a.design_skin && "small" == a.skinwave_mode)
          da.append(
            '<div class="the-bg"></div><div class="ap-controls-left"><div class="con-playpause"><div class="playbtn"><div class="play-icon"></div><div class="play-icon-hover"></div></div><div class="pausebtn" style="display:none"><div class="pause-icon"><div class="pause-part-1"></div><div class="pause-part-2"></div></div><div class="pause-icon-hover"></div></div></div></div><div class="ap-controls-right"><div class="controls-volume"><div class="volumeicon"></div><div class="volume_static"></div><div class="volume_active"></div><div class="volume_cut"></div></div></div>' +
              d
          );
        else if (
          "skin-aria" == a.design_skin ||
          "skin-silver" == a.design_skin ||
          "skin-redlights" == a.design_skin ||
          "skin-steel" == a.design_skin
        ) {
          var l = (g =
            '<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="30px" viewBox="0 0 25 30" xml:space="preserve"> <path d="M24.156,13.195L2.406,0.25C2.141,0.094,1.867,0,1.555,0C0.703,0,0.008,0.703,0.008,1.562H0v26.875h0.008 C0.008,29.297,0.703,30,1.555,30c0.32,0,0.586-0.109,0.875-0.266l21.727-12.93C24.672,16.375,25,15.727,25,15 S24.672,13.633,24.156,13.195z"/> </svg>');
          "skin-silver" == a.design_skin &&
            ((g =
              '<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="30px" viewBox="0 0 25 30" xml:space="preserve"> <path d="M24.156,13.195L2.406,0.25C2.141,0.094,1.867,0,1.555,0C0.703,0,0.008,0.703,0.008,1.562H0v26.875h0.008 C0.008,29.297,0.703,30,1.555,30c0.32,0,0.586-0.109,0.875-0.266l21.727-12.93C24.672,16.375,25,15.727,25,15 S24.672,13.633,24.156,13.195z"/> </svg>'),
            (l =
              '<svg version="1.2" baseProfile="tiny" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="30px" viewBox="0 0 25 30" xml:space="preserve"> <path d="M9.812,29.7c0,0.166-0.178,0.3-0.398,0.3H2.461c-0.22,0-0.398-0.134-0.398-0.3V0.3c0-0.166,0.178-0.3,0.398-0.3h6.953 c0.22,0,0.398,0.134,0.398,0.3V29.7z"/> <path d="M23.188,29.7c0,0.166-0.178,0.3-0.398,0.3h-6.953c-0.22,0-0.398-0.134-0.398-0.3V0.3c0-0.166,0.178-0.3,0.398-0.3h6.953 c0.22,0,0.398,0.134,0.398,0.3V29.7z"/> </svg>'));
          if (
            "skin-redlights" == a.design_skin ||
            "skin-steel" == a.design_skin
          )
            l = g = "";
          g =
            '<div class="the-bg"></div><div class="ap-controls-left"><div class="con-playpause"><div class="playbtn"><div class="play-icon">' +
            g +
            '</div><div class="play-icon-hover"></div></div><div class="pausebtn" style="display:none"><div class="pause-icon">' +
            l +
            '</div><div class="pause-icon-hover"></div></div></div>';
          "skin-silver" == a.design_skin &&
            (g += '<div class="curr-time">00:00</div>');
          g += "</div>";
          a.settings_extrahtml_in_float_right &&
            ((g +=
              '<div class="controls-right">' +
              a.settings_extrahtml_in_float_right +
              "</div>"),
            "skin-redlights" == a.design_skin &&
              a.parentgallery &&
              a.parentgallery.get(0)
                .api_skin_redlights_give_controls_right_to_all &&
              a.parentgallery
                .get(0)
                .api_skin_redlights_give_controls_right_to_all());
          g += '<div class="ap-controls-right">';
          "skin-silver" == a.design_skin
            ? ((g +=
                '<div class="controls-volume controls-volume-vertical"><div class="volumeicon"></div><div class="volume-holder"><div class="volume_static"></div><div class="volume_active"></div><div class="volume_cut"></div></div></div>'),
              "on" != a.disable_timer &&
                (g += '<div class="total-time">00:00</div>'),
              (g += "</div>" + d))
            : ("skin-redlights" == a.design_skin &&
                ("on" != a.disable_volume &&
                  (g +=
                    '<div class="controls-volume"><div class="volumeicon"></div><div class="volume_static"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="12px" viewBox="0 0 57 12" enable-background="new 0 0 57 12" xml:space="preserve"> <rect y="9" fill="#414042" width="3" height="3"/> <rect x="6" y="8" fill="#414042" width="3" height="4"/> <rect x="12" y="7" fill="#414042" width="3" height="5"/> <rect x="18" y="5.958" fill="#414042" width="3" height="6"/> <rect x="24" y="4.958" fill="#414042" width="3" height="7"/> <rect x="30" y="4" fill="#414042" width="3" height="8"/> <rect x="36" y="3" fill="#414042" width="3" height="9"/> <rect x="42" y="2" fill="#414042" width="3" height="10"/> <rect x="48" y="1" fill="#414042" width="3" height="11"/> <rect x="54" fill="#414042" width="3" height="12"/> </svg></div><div class="volume_active"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="12px" viewBox="0 0 57 12" enable-background="new 0 0 57 12" xml:space="preserve"> <rect y="9" fill="#414042" width="3" height="3"/> <rect x="6" y="8" fill="#414042" width="3" height="4"/> <rect x="12" y="7" fill="#414042" width="3" height="5"/> <rect x="18" y="5.958" fill="#414042" width="3" height="6"/> <rect x="24" y="4.958" fill="#414042" width="3" height="7"/> <rect x="30" y="4" fill="#414042" width="3" height="8"/> <rect x="36" y="3" fill="#414042" width="3" height="9"/> <rect x="42" y="2" fill="#414042" width="3" height="10"/> <rect x="48" y="1" fill="#414042" width="3" height="11"/> <rect x="54" fill="#414042" width="3" height="12"/> </svg></div><div class="volume_cut"></div></div>'),
                (g += '<div class="clear"></div>')),
              (g += d),
              "on" != a.disable_timer &&
                (g += '<div class="total-time">00:00</div>'));
          "skin-silver" != a.design_skin && (g += "</div>");
          da.append(g);
        } else
          b.hasClass("alternate-layout") ? da.append(g + d) : da.append(d + g);
        0 < da.find(".ap-controls-left").length &&
          (J = da.find(".ap-controls-left").eq(0));
        0 < da.find(".ap-controls-right").length &&
          (aa = da.find(".ap-controls-right").eq(0));
        "on" != a.disable_timer &&
          ((O = b.find(".curr-time").eq(0)),
          (ba = b.find(".total-time").eq(0)),
          "skin-steel" == a.design_skin &&
            0 == O.length &&
            (ba.before(
              '<div class="curr-time">00:00</div> <span class="separator-slash">/</span> '
            ),
            (O = ba.prev().prev())));
        0 < Number(a.sample_time_total) &&
          ((H = Number(a.sample_time_total)), ba && ba.html(Fb(H)));
        n = da.find(".scrubbar").eq(0);
        va = da.children(".con-controls");
        x = b.find(".con-playpause").eq(0);
        v = b.find(".controls-volume").eq(0);
        if (!A) {
          0 < b.children(".meta-artist").length &&
            (b.hasClass("alternate-layout")
              ? (va.children().last().hasClass("clear") &&
                  va.children().last().remove(),
                va.append(b.children(".meta-artist")))
              : G.append(b.children(".meta-artist")));
          G.find(".meta-artist")
            .eq(0)
            .wrap('<div class="meta-artist-con"></div>');
          A = G.children(".meta-artist-con").eq(0);
          "skin-wave" == a.design_skin && x.after(A);
          "skin-aria" == a.design_skin && aa.prepend(A);
          if (
            "skin-redlights" == a.design_skin ||
            "skin-steel" == a.design_skin
          )
            aa.prepend('<div class="clear"></div>'), aa.prepend(A);
          "skin-silver" == a.design_skin && aa.append(A);
          "skin-default" == a.design_skin && aa.before(A);
        }
        b.addClass("meta-loaded");
        d = "";
        "" != Pa && (d = " height:" + a.design_thumbh + "px;");
        void 0 != b.attr("data-thumb") &&
          "" != b.attr("data-thumb") &&
          ((g = ""),
          (g = b.attr("data-thumb_link")
            ? g + ('<a href="' + b.attr("data-thumb_link") + '"')
            : g + "<div"),
          (g +=
            ' class="the-thumb-con"><div class="the-thumb" style="' +
            d +
            " background-image:url(" +
            b.attr("data-thumb") +
            ')"></div>'),
          (g = b.attr("data-thumb_link") ? g + "</a>" : g + "</div>"),
          "skin-customcontrols" != a.design_skin &&
            ("skin-wave" == a.design_skin && "small" == a.skinwave_mode
              ? J.prepend(g)
              : "skin-steel" == a.design_skin
              ? J.append(g)
              : G.prepend(g)),
          G.children(".the-thumb-con").eq(0));
        "on" == a.disable_volume && v.hide();
        "off" == a.disable_volume && v.show();
        "on" == a.disable_scrub && n.hide();
        "skin-wave" == a.design_skin &&
          a.parentgallery &&
          "undefined" != typeof a.parentgallery &&
          "on" == a.design_menu_show_player_state_button &&
          ("skin-wave" == a.design_skin
            ? aa.appendOnce(
                '<div class="btn-menu-state"> <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13.25px" height="13.915px" viewBox="0 0 13.25 13.915" enable-background="new 0 0 13.25 13.915" xml:space="preserve"> <path d="M1.327,4.346c-0.058,0-0.104-0.052-0.104-0.115V2.222c0-0.063,0.046-0.115,0.104-0.115H11.58 c0.059,0,0.105,0.052,0.105,0.115v2.009c0,0.063-0.046,0.115-0.105,0.115H1.327z"/> <path d="M1.351,8.177c-0.058,0-0.104-0.051-0.104-0.115V6.054c0-0.064,0.046-0.115,0.104-0.115h10.252 c0.058,0,0.105,0.051,0.105,0.115v2.009c0,0.063-0.047,0.115-0.105,0.115H1.351z"/> <path d="M1.351,12.182c-0.058,0-0.104-0.05-0.104-0.115v-2.009c0-0.064,0.046-0.115,0.104-0.115h10.252 c0.058,0,0.105,0.051,0.105,0.115v2.009c0,0.064-0.047,0.115-0.105,0.115H1.351z"/> </svg>    </div></div>'
              )
            : G.appendOnce('<div class="btn-menu-state"></div>'));
        "skin-wave" == a.design_skin &&
          "" != a.embed_code &&
          ("skin-wave" == a.design_skin
            ? aa.appendOnce(
                '<div class="btn-embed-code-con dzstooltip-con "><div class="btn-embed-code"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10.975px" height="14.479px" viewBox="0 0 10.975 14.479" enable-background="new 0 0 10.975 14.479" xml:space="preserve"> <g> <path d="M2.579,1.907c0.524-0.524,1.375-0.524,1.899,0l4.803,4.804c0.236-0.895,0.015-1.886-0.687-2.587L5.428,0.959 c-1.049-1.05-2.75-1.05-3.799,0L0.917,1.671c-1.049,1.05-1.049,2.751,0,3.801l3.167,3.166c0.7,0.702,1.691,0.922,2.587,0.686 L1.867,4.52c-0.524-0.524-0.524-1.376,0-1.899L2.579,1.907z M5.498,13.553c1.05,1.05,2.75,1.05,3.801,0l0.712-0.713 c1.05-1.05,1.05-2.75,0-3.8L6.843,5.876c-0.701-0.7-1.691-0.922-2.586-0.686l4.802,4.803c0.524,0.525,0.524,1.376,0,1.897 l-0.713,0.715c-0.523,0.522-1.375,0.522-1.898,0L1.646,7.802c-0.237,0.895-0.014,1.886,0.686,2.586L5.498,13.553z"/> </g> </svg></div><span class="dzstooltip transition-slidein arrow-bottom align-right skin-black " style="width: 350px; "><span style="max-height: 150px; overflow:hidden; display: block;">' +
                  a.embed_code +
                  "</span></span></div>"
              )
            : G.appendOnce(
                '<div class="btn-embed-code-con dzstooltip-con "><div class="btn-embed-code"><svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 15 15" xml:space="preserve"> <g id="Layer_1"> <polygon fill="#E6E7E8" points="1.221,7.067 0.494,5.422 4.963,1.12 5.69,2.767 "/> <polygon fill="#E6E7E8" points="0.5,5.358 1.657,4.263 3.944,10.578 2.787,11.676 "/> <polygon fill="#E6E7E8" points="13.588,9.597 14.887,8.34 12.268,2.672 10.969,3.93 "/> <polygon fill="#E6E7E8" points="14.903,8.278 14.22,6.829 9.714,11.837 10.397,13.287 "/> </g> <g id="Layer_2"> <rect x="6.416" y="1.713" transform="matrix(0.9663 0.2575 -0.2575 0.9663 2.1699 -1.6329)" fill="#E6E7E8" width="1.805" height="11.509"/> </g> </svg></div><span class="dzstooltip transition-slidein arrow-bottom align-right skin-black " style="width: 350px; "><span style="max-height: 150px; overflow:hidden; display: block;">' +
                  a.embed_code +
                  "</span></span></div>"
              ),
          b.find(".btn-embed-code-con").bind("click", function () {
            var a = c(this).find(".dzstooltip").get(0);
            if (
              "undefined" != typeof window.getSelection &&
              "undefined" != typeof document.createRange
            ) {
              var b = document.createRange();
              b.selectNodeContents(a);
              a = window.getSelection();
              a.removeAllRanges();
              a.addRange(b);
            } else "undefined" != typeof document.selection && "undefined" != typeof document.body.createTextRange && ((b = document.body.createTextRange()), b.moveToElementText(a), b.select());
          }));
        if ("skin-wave" == a.design_skin) {
          if ("on" != a.skinwave_enableSpectrum)
            if ("canvas" == a.skinwave_wave_mode)
              if (b.attr("data-pcm"))
                console.info("has pcm - ", b), (Eb = !0), r();
              else {
                d = [];
                for (g = 0; 1e3 > g; g++) d[g] = Math.random();
                d = JSON.stringify(d);
                b.attr("data-pcm", d);
                r();
                "on" == a.pcm_data_try_to_generate && bb();
              }
            else
              void 0 != b.attr("data-scrubbg") &&
                n
                  .children(".scrub-bg")
                  .eq(0)
                  .append(
                    '<img class="scrub-bg-img" src="' +
                      b.attr("data-scrubbg") +
                      '"/>'
                  ),
                void 0 != b.attr("data-scrubprog") &&
                  n
                    .children(".scrub-prog")
                    .eq(0)
                    .append(
                      '<img class="scrub-prog-img" src="' +
                        b.attr("data-scrubprog") +
                        '"/>'
                    ),
                n.find(".scrub-bg-img").eq(0).css({}),
                n
                  .find(".scrub-prog-img")
                  .eq(0)
                  .css({ width: n.children(".scrub-bg").width() }),
                "on" == a.skinwave_enableReflect &&
                  (n
                    .children(".scrub-bg-reflect")
                    .eq(0)
                    .append(
                      '<img class="scrub-bg-img-reflect" src="' +
                        b.attr("data-scrubbg") +
                        '"/>'
                    ),
                  void 0 != b.attr("data-scrubprog") &&
                    n
                      .children(".scrub-prog-reflect")
                      .eq(0)
                      .append(
                        '<img class="scrub-prog-img-reflect" src="' +
                          b.attr("data-scrubprog") +
                          '"/>'
                      ),
                  n
                    .find(".scrub-bg-img")
                    .eq(0)
                    .css({ "transform-origin": "100% 100%" }),
                  n
                    .find(".scrub-prog-img")
                    .eq(0)
                    .css({ "transform-origin": "100% 100%" }));
          else
            n
              .children(".scrub-bg")
              .eq(0)
              .append(
                '<canvas class="scrub-bg-canvas" style="width: 100%; height: 100%;"></canvas><div class="wave-separator"></div>'
              ),
              (P = b.find(".scrub-bg-canvas").eq(0)),
              (gb = P.get(0).getContext("2d")),
              "audio" == t &&
                (n
                  .children(".scrub-prog")
                  .eq(0)
                  .append(
                    '<canvas class="scrub-prog-canvas" style="width: 100%; height: 100%;"></canvas>'
                  ),
                (Qa = b.find(".scrub-prog-canvas").eq(0)),
                (Ra = Qa.get(0).getContext("2d"))),
              "on" == a.skinwave_enableReflect &&
                (n
                  .children(".scrub-bg-reflect")
                  .eq(0)
                  .append(
                    '<canvas class="scrub-bg-canvas-reflect" style="width: 100%; height: 100%;"></canvas>'
                  ),
                (qb = n.find(".scrub-bg-canvas-reflect").eq(0)),
                (Gb = qb.get(0).getContext("2d")),
                "audio" == t &&
                  (n
                    .children(".scrub-prog-reflect")
                    .eq(0)
                    .append(
                      '<canvas class="scrub-prog-canvas-reflect" style="width: 100%; height: 100%;"></canvas>'
                    ),
                  (Sa = n.find(".scrub-prog-canvas-reflect").eq(0)),
                  (Hb = Sa.get(0).getContext("2d"))));
          "on" == a.skinwave_timer_static &&
            (O && O.addClass("static"), ba && ba.addClass("static"));
          da.css({});
          "canvas" == a.skinwave_wave_mode
            ? setTimeout(function () {
                b.addClass("scrubbar-loaded");
              }, 700)
            : ((d = new Image()),
              (d.onload = function (a) {
                b.addClass("scrubbar-loaded");
                oa();
              }),
              (d.src = b.attr("data-scrubbg")),
              setTimeout(function () {
                b.addClass("scrubbar-loaded");
              }, 2500));
        }
        b.hasClass("skin-minimal") &&
          (x
            .children(".playbtn")
            .append(
              '<canvas width="100" height="100" class="playbtn-canvas"/>'
            ),
          (rb = x.find(".playbtn-canvas").eq(0).get(0)),
          x
            .children(".pausebtn")
            .append(
              '<canvas width="100" height="100" class="pausebtn-canvas"/>'
            ),
          (sb = x.find(".pausebtn-canvas").eq(0).get(0)));
        b.hasClass("skin-minion") &&
          0 < b.find(".menu-description").length &&
          (x.addClass("with-tooltip"),
          x.prepend(
            '<span class="dzstooltip" style="left:-7px;">' +
              b.find(".menu-description").html() +
              "</span>"
          ),
          x
            .children("span")
            .eq(0)
            .css("width", x.children("span").eq(0).textWidth() + 10));
        a.parentgallery &&
          "undefined" != typeof a.parentgallery &&
          "on" != a.disable_player_navigation &&
          ((d =
            '<div class="prev-btn"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="3.208,7.674 5.208,9.104 5.208,5.062 3.208,5.652 "/> </g> <g id="Layer_1"> <rect x="0.306" y="3.074" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.4203 4.7299)" fill="#E6E7E8" width="9.386" height="2.012"/> <rect x="0.307" y="8.29" transform="matrix(0.7072 0.707 -0.707 0.7072 8.0362 -0.8139)" fill="#E6E7E8" width="9.387" height="2.012"/> </g> </svg></div>'),
          (g =
            '<div class="next-btn"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="7.035,5.695 5.074,4.292 5.074,8.257 7.035,7.678 "/> </g> <g id="Layer_1"> <rect x="0.677" y="8.234" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.532 12.0075)" fill="#E6E7E8" width="9.204" height="1.973"/> <rect x="0.674" y="3.118" transform="matrix(-0.7072 -0.707 0.707 -0.7072 6.1069 10.7384)" fill="#E6E7E8" width="9.206" height="1.974"/> </g> </svg></div>'),
          "skin-steel" == a.design_skin &&
            ((d =
              '<div class="prev-btn"><svg class="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="3.208,7.674 5.208,9.104 5.208,5.062 3.208,5.652 "/> </g> <g id="Layer_1"> <rect x="0.306" y="3.074" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.4203 4.7299)" fill="#E6E7E8" width="9.386" height="2.012"/> <rect x="0.307" y="8.29" transform="matrix(0.7072 0.707 -0.707 0.7072 8.0362 -0.8139)" fill="#E6E7E8" width="9.387" height="2.012"/> </g> </svg> <svg class="svg2"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="3.208,7.674 5.208,9.104 5.208,5.062 3.208,5.652 "/> </g> <g id="Layer_1"> <rect x="0.306" y="3.074" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.4203 4.7299)" fill="#E6E7E8" width="9.386" height="2.012"/> <rect x="0.307" y="8.29" transform="matrix(0.7072 0.707 -0.707 0.7072 8.0362 -0.8139)" fill="#E6E7E8" width="9.387" height="2.012"/> </g> </svg></div>'),
            (g =
              '<div class="next-btn"><svg class="svg1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="7.035,5.695 5.074,4.292 5.074,8.257 7.035,7.678 "/> </g> <g id="Layer_1"> <rect x="0.677" y="8.234" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.532 12.0075)" fill="#E6E7E8" width="9.204" height="1.973"/> <rect x="0.674" y="3.118" transform="matrix(-0.7072 -0.707 0.707 -0.7072 6.1069 10.7384)" fill="#E6E7E8" width="9.206" height="1.974"/> </g> </svg><svg class="svg2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="13.325px" viewBox="0 0 10 13.325" enable-background="new 0 0 10 13.325" xml:space="preserve"> <g id="Layer_2"> <polygon opacity="0.5" fill="#E6E7E8" points="7.035,5.695 5.074,4.292 5.074,8.257 7.035,7.678 "/> </g> <g id="Layer_1"> <rect x="0.677" y="8.234" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.532 12.0075)" fill="#E6E7E8" width="9.204" height="1.973"/> <rect x="0.674" y="3.118" transform="matrix(-0.7072 -0.707 0.707 -0.7072 6.1069 10.7384)" fill="#E6E7E8" width="9.206" height="1.974"/> </g> </svg></div>')),
          (l = d + g),
          0 == a.parentgallery.hasClass("mode-showall") &&
            ("skin-wave" == a.design_skin && "small" == a.skinwave_mode
              ? J.appendOnce(l, ".prev-btn")
              : "skin-wave" == a.design_skin
              ? x.after(l)
              : "skin-steel" == a.design_skin
              ? (J.prependOnce(d, ".prev-btn"),
                0 < J.children(".the-thumb-con").length
                  ? 0 < J.children(".the-thumb-con").eq(0).length &&
                    0 ==
                      J.children(".the-thumb-con")
                        .eq(0)
                        .prev()
                        .hasClass("next-btn") &&
                    J.children(".the-thumb-con").eq(0).before(g)
                  : J.appendOnce(g, ".next-btn"))
              : G.appendOnce(l, ".prev-btn")));
        0 < b.children(".afterplayer").length &&
          b.append(b.children(".afterplayer"));
        "" != a.settings_extrahtml &&
          (-1 < String(a.settings_extrahtml).indexOf("{{get_likes}}") &&
            0 == is_ie8() &&
            (Q++, hb()),
          -1 < String(a.settings_extrahtml).indexOf("{{get_plays}}") &&
          0 == is_ie8()
            ? (Q++, sa())
            : 1 === ta && (la(), (ta = 2)),
          -1 < String(a.settings_extrahtml).indexOf("{{get_rates}}") &&
            (Q++, Y()),
          0 == Q && b.find(".extra-html").addClass("active"),
          setTimeout(function () {
            b.find(".extra-html").addClass("active");
          }, 2e3));
      }
      function r(a) {
        var b = { prepare_for_transition_in: !1 };
        a && (b = c.extend(b, a));
        a = '<canvas class="scrub-bg-img';
        b.prepare_for_transition_in && (a += " transitioning-in");
        a += '" ></canvas>';
        n.children(".scrub-bg").eq(0).append(a);
        a = ".scrub-bg-img";
        b.prepare_for_transition_in && (a += ".transitioning-in");
        La = n.find(a).eq(0);
        a = '<canvas class="scrub-prog-img';
        b.prepare_for_transition_in && (a += " transitioning-in");
        a += '" ></canvas>';
        n.children(".scrub-prog").eq(0).append(a);
        a = ".scrub-prog-img";
        b.prepare_for_transition_in && (a += ".transitioning-in");
        Ya = n.find(a).eq(0);
      }
      function u(b, g, l) {
        var e = c(b),
          f = e.get(0).getContext("2d");
        g = JSON.parse(g);
        var k, h;
        for (h = k = 0; h < g.length; h++) g[h] > k && (k = g[h]);
        k = 1 / k;
        for (h = 0; h < g.length; h++) g[h] *= k;
        h = e.width();
        e.height();
        b.width = h;
        h = b.width;
        b = b.height;
        e = parseInt(a.skinwave_wave_mode_canvas_waves_number);
        k = parseInt(a.skinwave_wave_mode_canvas_waves_padding);
        var n = parseFloat(a.skinwave_wave_mode_canvas_reflection_size);
        1 > h / e && (e = Math.ceil(h / 8));
        2 > h / e && (e = Math.ceil(h / 6));
        3 > h / e && (e = Math.ceil(h / 4));
        var r = h / e,
          p = 1 - n;
        for (h = 0; h < e; h++) {
          var m = Math.ceil((g.length / e) * h),
            m = Math.abs(g[m] * b * p);
          f.beginPath();
          f.rect(h * r, b * p - m, r - k, m);
          f.fillStyle = l;
          f.fill();
        }
        if (0 < n)
          for (h = 0; h < e; h++) {
            m = Math.ceil((g.length / e) * h);
            m = Math.abs(g[m] * b * n);
            f.beginPath();
            f.rect(h * r, b * p, r - k, m);
            var m = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(l),
              q = "";
            m &&
              ((m = {
                r: parseInt(m[1], 16),
                g: parseInt(m[2], 16),
                b: parseInt(m[3], 16),
              }),
              (q = "rgba(" + m.r + "," + m.g + "," + m.b + ",0.25)"));
            f.fillStyle = q;
            f.fill();
          }
      }
      function hb(d) {
        d = { action: "dzsap_get_likes", postdata: d, playerid: B };
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a);
              var d = !1;
              -1 < a.indexOf("likesubmitted") &&
                ((a = a.replace("likesubmitted", "")), (d = !0));
              "" == a && (a = 0);
              var c = b.find(".extra-html").eq(0).html(),
                c = c.replace("{{get_likes}}", a);
              b.find(".extra-html").eq(0).html(c);
              Q--;
              d && b.find(".extra-html").find(".btn-like").addClass("active");
              0 == Q && b.find(".extra-html").addClass("active");
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              Q--;
              0 == Q && b.find(".extra-html").addClass("active");
            },
          });
      }
      function Y(d) {
        d = { action: "dzsap_get_rate", postdata: d, playerid: B };
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (d) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + d);
              -1 < d.indexOf("likesubmitted") &&
                (d = d.replace("likesubmitted", ""));
              "" == d && (d = "0|0");
              d = d.split("|");
              Ub = d[1];
              b.find(".extra-html .counter-rates .the-number").eq(0).html(Ub);
              Q--;
              b.find(".star-rating-set-clip").width(
                d[0] * (parseInt(b.find(".star-rating-bg").width(), 10) / 5)
              );
              "undefined" != typeof d[2] &&
                ((wa = d[2]),
                a.parentgallery &&
                  void 0 != c(a.parentgallery).get(0) &&
                  void 0 !=
                    c(a.parentgallery).get(0).api_player_rateSubmitted &&
                  c(a.parentgallery).get(0).api_player_rateSubmitted());
              0 >= Q && b.find(".extra-html").addClass("active");
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              Q--;
              0 >= Q && b.find(".extra-html").addClass("active");
            },
          });
      }
      function sa(d) {
        d = { action: "dzsap_get_views", postdata: d, playerid: B };
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a);
              -1 < a.indexOf("viewsubmitted") &&
                ((a = a.replace("viewsubmitted", "")), (ha = "on"), (ta = 0));
              "" == a && (a = 0);
              if (-1 < String(a).indexOf("{{theip")) {
                var d = /{\{theip-(.*?)}}/g.exec(a);
                d[1] && (Vb = d[1]);
                a = a.replace(/{\{theip-(.*?)}}/g, "");
              }
              1 == ta && (la(), (a = Number(a) + ta), (ta = 2));
              d = b.find(".extra-html").eq(0).html();
              d = d.replace("{{get_plays}}", a);
              b.find(".extra-html").eq(0).html(d);
              Q--;
              0 == Q && b.find(".extra-html").addClass("active");
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              Q--;
              0 == Q && b.find(".extra-html").addClass("active");
            },
          });
      }
      function ea(d) {
        d = { action: "dzsap_submit_rate", postdata: d, playerid: B };
        -1 < wa ||
          (a.settings_php_handler &&
            c.ajax({
              type: "POST",
              url: a.settings_php_handler,
              data: d,
              success: function (d) {
                "undefined" != typeof window.console &&
                  console.log("Got this from the server: " + d);
                var l =
                  b.find(".star-rating-set-clip").outerWidth() /
                  b.find(".star-rating-bg").outerWidth();
                d = parseInt(b.find(".counter-rates .the-number").html(), 10);
                d++;
                l = (5 * (d - 1) * l + xa) / d;
                b.find(".star-rating-set-clip").width(
                  l * (parseInt(b.find(".star-rating-bg").width(), 10) / 5)
                );
                b.find(".counter-rates .the-number").html(d);
                a.parentgallery &&
                  void 0 != c(a.parentgallery).get(0) &&
                  void 0 !=
                    c(a.parentgallery).get(0).api_player_rateSubmitted &&
                  c(a.parentgallery).get(0).api_player_rateSubmitted();
              },
              error: function (d) {
                "undefined" != typeof window.console &&
                  console.log("Got this from the server: " + d, d);
                var l =
                  b.find(".star-rating-set-clip").outerWidth() /
                  b.find(".star-rating-bg").outerWidth();
                d = parseInt(b.find(".counter-rates .the-number").html(), 10);
                d++;
                l = (5 * (d - 1) * l + xa) / d;
                b.find(".star-rating-set-clip").width(
                  l * (parseInt(b.find(".star-rating-bg").width(), 10) / 5)
                );
                b.find(".counter-rates .the-number").html(d);
                a.parentgallery &&
                  void 0 != c(a.parentgallery).get(0) &&
                  void 0 !=
                    c(a.parentgallery).get(0).api_player_rateSubmitted &&
                  c(a.parentgallery).get(0).api_player_rateSubmitted();
              },
            }));
      }
      function ja(b) {
        b = { action: "dzsap_submit_download", postdata: b, playerid: B };
        -1 < wa ||
          (a.settings_php_handler &&
            c.ajax({
              type: "POST",
              url: a.settings_php_handler,
              data: b,
              success: function (a) {
                "undefined" != typeof window.console &&
                  console.log("Got this from the server: " + a);
              },
              error: function (a) {
                "undefined" != typeof window.console &&
                  console.log("Got this from the server: " + a, a);
              },
            }));
      }
      function la(d) {
        d = {
          action: "dzsap_submit_views",
          postdata: 1,
          playerid: B,
          currip: Vb,
        };
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a);
              a = b.find(".counter-hits .the-number").html();
              a = parseInt(a, 10);
              2 != ta && a++;
              b.find(".counter-hits .the-number").html(a);
              ha = "on";
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              a = b.find(".counter-hits .the-number").html();
              a = parseInt(a, 10);
              a++;
              b.find(".counter-hits .the-number").html(a);
              ha = "on";
            },
          });
      }
      function ib(d) {
        d = { action: "dzsap_submit_like", postdata: d, playerid: B };
        (a.settings_php_handler || b.hasClass("is-preview")) &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a);
              b.find(".btn-like").addClass("active");
              a = b.find(".counter-likes .the-number").html();
              a = parseInt(a, 10);
              a++;
              b.find(".counter-likes .the-number").html(a);
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              b.find(".btn-like").addClass("active");
              a = b.find(".counter-likes .the-number").html();
              a = parseInt(a, 10);
              a++;
              b.find(".counter-likes .the-number").html(a);
            },
          });
      }
      function w(d) {
        d = { action: "dzsap_retract_like", postdata: d, playerid: B };
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: d,
            success: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a);
              b.find(".btn-like").removeClass("active");
              a = b.find(".counter-likes .the-number").html();
              a = parseInt(a, 10);
              a--;
              b.find(".counter-likes .the-number").html(a);
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              b.find(".btn-like").removeClass("active");
              a = b.find(".counter-likes .the-number").html();
              a = parseInt(a, 10);
              a--;
              b.find(".counter-likes .the-number").html(a);
            },
          });
      }
      function T(d) {
        var g = {
          action: "dzsap_front_submitcomment",
          postdata: d,
          playerid: B,
          comm_position: fb,
          skinwave_comments_process_in_php: a.skinwave_comments_process_in_php,
          skinwave_comments_avatar: a.skinwave_comments_avatar,
          skinwave_comments_account: a.skinwave_comments_account,
        };
        0 < b.find("*[name=comment-email]").length &&
          (g.email = b.find("*[name=comment-email]").eq(0).val());
        a.settings_php_handler &&
          c.ajax({
            type: "POST",
            url: a.settings_php_handler,
            data: g,
            success: function (d) {
              "0" == d.charAt(d.length - 1) && (d = d.slice(0, d.length - 1));
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + d);
              "on" != a.skinwave_comments_process_in_php
                ? (d = g.postdata)
                : ((d =
                    "" +
                    ('<span class="dzstooltip-con" style="left:' +
                      fb +
                      '"><span class="dzstooltip arrow-from-start transition-slidein arrow-bottom skin-black" style="width: 250px;"><span class="the-comment-author">@' +
                      a.skinwave_comments_account +
                      "</span> says:<br>")),
                  (d += htmlEncode(g.postdata)),
                  (d +=
                    '</span><div class="the-avatar" style="background-image: url(' +
                    a.skinwave_comments_avatar +
                    ')"></div></span>'));
              E.append(d);
              Ib && Ib(b, d);
            },
            error: function (a) {
              "undefined" != typeof window.console &&
                console.log("Got this from the server: " + a, a);
              E.append(g.postdata);
            },
          });
      }
      function M(d) {
        var g = { do_not_autoplay: !1 };
        d && (g = c.extend(g, d));
        "off" == a.cue &&
          "auto" == ha &&
          ((ta = 1),
          (ha =
            -1 < String(a.settings_extrahtml).indexOf("{{get_plays}}")
              ? "on"
              : "off"));
        if (1 != $a)
          if ("youtube" == t) is_ie() && X.css({ left: "-478em" });
          else {
            d = '<audio preload="metadata"';
            is_ios() || is_android();
            d += ">";
            void 0 != b.attr("data-source") &&
              ((jb = b.attr("data-source")),
              (d += '<source src="' + jb + '" type="audio/mpeg">'),
              void 0 != b.attr("data-sourceogg") &&
                (d +=
                  '<source src="' +
                  b.attr("data-sourceogg") +
                  '" type="audio/ogg">'));
            d += "</audio>";
            is_ie8() &&
              dzsap_list &&
              0 < dzsap_list.length &&
              (Ta = "&isie8=on");
            if (K)
              if ("light" == a.settings_backup_type)
                (d =
                  '<object type="application/x-shockwave-flash" data="' +
                  a.swf_location +
                  '" width="100" height="50" id="flashcontent_' +
                  N +
                  '" allowscriptaccess="always" style="visibility: visible; "><param name="movie" value="ap.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="media=' +
                  b.attr("data-source") +
                  "&fvid=" +
                  N +
                  Ta +
                  '"><embed src="' +
                  a.swf_location +
                  '" width="100" height="100" allowScriptAccess="always"></object>'),
                  b.addClass("lightflashbackup");
              else {
                var l = (d = ""),
                  e = "";
                a.parentgallery &&
                  "undefined" != typeof a.parentgallery &&
                  "on" != a.disable_player_navigation &&
                  (l = "&design_skip_buttons=on");
                a.parentgallery &&
                  "undefined" != typeof a.parentgallery &&
                  "on" != a.design_menu_show_player_state_button &&
                  (e = "&design_menu_show_player_state_button=on");
                "on" == a.disable_volume && (d += "&settings_enablevolume=off");
                d =
                  '<object class="the-full-flash-backup" type="application/x-shockwave-flash" data="' +
                  a.swffull_location +
                  '" width="100%" height="100%" style="height:50px" id="flashcontent_' +
                  N +
                  '" allowscriptaccess="always" style="visibility: visible; "><param name="movie" value="' +
                  a.swffull_location +
                  '"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="transparent"><param name="flashvars" value="media=' +
                  b.attr("data-source") +
                  "&fvid=" +
                  N +
                  Ta +
                  d +
                  "&autoplay=" +
                  a.autoplay +
                  "&skinwave_mode" +
                  a.skinwave_mode +
                  l +
                  e;
                b.addClass("fullflashbackup");
                "undefined" != typeof b.attr("data-scrubbg") &&
                  (d += "&scrubbg=" + b.attr("data-scrubbg"));
                "undefined" != typeof b.attr("data-scrubprog") &&
                  (d += "&scrubprog=" + b.attr("data-scrubprog"));
                "undefined" != typeof b.attr("data-thumb") &&
                  "" != b.attr("data-thumb") &&
                  (d += "&thumb=" + b.attr("data-thumb"));
                d += "&settings_enablespectrum=" + a.skinwave_enableSpectrum;
                d += "&skinwave_enablereflect=" + a.skinwave_enableReflect;
                d += "&skin=" + a.design_skin;
                d += "&settings_multiplier=" + a.skinwave_spectrummultiplier;
                d += '">You need Flash Player.</object>';
                G.find(".the-thumb-con,.ap-controls,.the-media").remove();
                G.prepend(d);
                "skin-wave" == a.design_skin &&
                  G.find(".the-full-flash-backup").css("height", 200);
                "undefined" != typeof b.attr("data-thumb") &&
                  "" != b.attr("data-thumb") &&
                  G.find(".the-full-flash-backup").css("height", 200);
                d = "";
              }
            Wb = d;
            X.append(d);
            (q = X.children("audio").get(0)) &&
              q.addEventListener &&
              "fake" != b.attr("data-source") &&
              q.addEventListener(
                "error",
                function (a) {
                  this.networkState === HTMLMediaElement.NETWORK_NO_SOURCE &&
                    console.log(
                      "could not load audio source - ",
                      b.attr("data-source")
                    );
                  b.addClass("errored-out");
                  b.append('<div class="feedback-text"></div>');
                },
                !0
              );
            K &&
              "light" == a.settings_backup_type &&
              setTimeout(function () {
                q = X.find("object").eq(0).get(0);
              }, 500);
            is_ios() || is_ie8() || 1 == K
              ? "full" == a.settings_backup_type
                ? ra(g)
                : setTimeout(function () {
                    ra(g);
                  }, 1e3)
              : (kb = setInterval(function () {
                  var d = { do_not_autoplay: !1 };
                  g && (d = c.extend(d, g));
                  "youtube" != t &&
                    "undefined" != typeof q &&
                    ("AUDIO" != q.nodeName || "shoutcast" == a.type
                      ? ra(d)
                      : is_safari()
                      ? 1 <= q.readyState &&
                        (ra(d),
                        clearInterval(kb),
                        a.action_audio_loaded_metadata &&
                          a.action_audio_loaded_metadata(b))
                      : 2 <= q.readyState &&
                        (ra(d),
                        clearInterval(kb),
                        a.action_audio_loaded_metadata &&
                          a.action_audio_loaded_metadata(b)));
                }, 50));
            a.failsafe_repair_media_element &&
              (setTimeout(function () {
                if (
                  X.children().eq(0).get(0) &&
                  "AUDIO" == X.children().eq(0).get(0).nodeName
                )
                  return !1;
                X.html("");
                X.append(Wb);
                var b = pa;
                Ba();
                q = X.children("audio").get(0);
                K &&
                  "light" == a.settings_backup_type &&
                  setTimeout(function () {
                    q = X.find("object").eq(0).get(0);
                  }, 10);
                b &&
                  ((b = !1),
                  setTimeout(function () {
                    ca();
                  }, 20));
              }, a.failsafe_repair_media_element),
              (a.failsafe_repair_media_element = ""));
            b.addClass("media-setuped");
          }
      }
      function R() {
        Ba();
        q && "audio" == a.type && ((q.innerHTML = ""), q.load());
        X && (X.children().remove(), ($a = !1));
      }
      function tb() {
        n.bind("mousemove", Jb);
        n.bind("mouseleave", Jb);
        n.bind("click", Jb);
        v.find(".volumeicon").bind("click", dc);
        "skin-redlights" == a.design_skin
          ? (v.bind("mousemove", Ua),
            v.bind("mousedown", Ua),
            c(document).undelegate(window, "mouseup", Ua),
            c(document).delegate(window, "mouseup", Ua))
          : (v.find(".volume_active").bind("click", Ua),
            v.find(".volume_static").bind("click", Ua));
        b.find(".playbtn").unbind("click");
        x.bind("click", Xb);
        "skin-customcontrols" == a.design_skin &&
          b.find(".custom-play-btn,.custom-pause-btn").bind("click", Xb);
        var d = !1,
          g = 0,
          l = 0;
        n.bind("touchstart", function (a) {
          d = !0;
        });
        c(document).bind("touchmove", function (a) {
          d &&
            ((g = a.originalEvent.touches[0].pageX),
            (l = g - n.offset().left),
            0 > l && (l = 0),
            l > n.width() && (l = n.width()),
            Kb(l / n.width()));
        });
        c(document).bind("touchend", function (a) {
          d = !1;
        });
        c(document).delegate(".btn-like", "click", ub);
        c(document).delegate(".star-rating-con", "mousemove", Ea);
        c(document).delegate(".star-rating-con", "mouseleave", Ea);
        c(document).delegate(".star-rating-con", "click", Ea);
        setTimeout(oa, 300);
        setTimeout(oa, 2e3);
        0 < a.settings_trigger_resize &&
          setInterval(oa, a.settings_trigger_resize);
        return !1;
      }
      function ub() {
        console.info("click_like()");
        var a = c(this);
        0 != b.has(a).length && (a.hasClass("active") ? w() : ib());
      }
      function Fa() {
        return Lb;
      }
      function ra(d) {
        b.attr("id");
        var g = { do_not_autoplay: !1 };
        d && (g = c.extend(g, d));
        if (!b.hasClass("dzsap-loaded")) {
          0 != K &&
            "light" == a.settings_backup_type &&
            "undefined" != typeof q &&
            q.fn_getSoundDuration &&
            eval(
              "totalDuration = parseFloat(_cmedia.fn_getsoundduration" +
                N +
                "())"
            );
          "undefined" != typeof q &&
            "AUDIO" == q.nodeName &&
            q.addEventListener("ended", Yb);
          clearInterval(kb);
          clearTimeout(kb);
          tb();
          is_ie8() && b.addClass("lte-ie8");
          setTimeout(function () {
            O && 0 < O.outerWidth() && (Mb = O.outerWidth());
          }, 1e3);
          is_ie8() &&
            !Array.prototype.indexOf &&
            (Array.prototype.indexOf = function (a, b) {
              var d = this.length >>> 0,
                c = Number(b) || 0,
                c = 0 > c ? Math.ceil(c) : Math.floor(c);
              for (0 > c && (c += d); c < d; c++)
                if (c in this && this[c] === a) return c;
              return -1;
            });
          "fake" != t &&
            ("on" != a.settings_exclude_from_list &&
              dzsap_list &&
              -1 == dzsap_list.indexOf(b) &&
              null == a.fakeplayer &&
              dzsap_list.push(b),
            "on" == a.type_audio_stop_buffer_on_unfocus &&
              (b.data("type_audio_stop_buffer_on_unfocus", "on"),
              (b.get(0).api_destroy_for_rebuffer = function () {
                "audio" == a.type && (U = q.currentTime);
                R();
                Nb = !0;
              })));
          if (
            "skin-wave" == a.design_skin &&
            "on" == a.skinwave_enableSpectrum &&
            (console.info("USED AUDIO CONTEXT"),
            null == window.dzsap_audio_ctx
              ? "undefined" !== typeof AudioContext
                ? ((C = new AudioContext()), (window.dzsap_audio_ctx = C))
                : "undefined" !== typeof webkitAudioContext
                ? ((C = new webkitAudioContext()), (window.dzsap_audio_ctx = C))
                : (C = null)
              : (C = window.dzsap_audio_ctx),
            C)
          ) {
            var l = function () {
              console.info("generateFakeArray()");
              for (var a = [], b = 0; 256 > b; b++)
                a[b] = (256 - b) / 2 + 100 * Math.random();
              return a;
            };
            "undefined" != typeof C.createJavaScriptNode &&
              (Ga = C.createJavaScriptNode(2048, 1, 1));
            "undefined" != typeof C.createScriptProcessor &&
              (Ga = C.createScriptProcessor(4096, 1, 1));
            if (is_android())
              (V = C.createAnalyser()),
                (V.smoothingTimeConstant = 0.3),
                (V.fftSize = 512),
                (Ga.onaudioprocess = function (a) {
                  a = new Uint8Array(V.frequencyBinCount);
                  V.getByteFrequencyData(a);
                  Va = a;
                  pa && (Va = l());
                }),
                (ma = C.createMediaElementSource(q)),
                ma.connect(V),
                V.connect(C.destination),
                Ga.connect(C.destination);
            else if (Ga) {
              V = C.createAnalyser();
              V.smoothingTimeConstant = 0.3;
              V.fftSize = 512;
              Ga.onaudioprocess = function () {
                if (!e) {
                  var a = new Uint8Array(V.frequencyBinCount);
                  V.getByteFrequencyData(a);
                  Va = a;
                  pa && is_ios() && (Va = l());
                }
              };
              "audio" == t &&
                (is_chrome() || is_firefox() || is_safari() || is_ios()) &&
                ((ma = C.createMediaElementSource(q)),
                ma.connect(V),
                V.connect(C.destination),
                Ga.connect(C.destination));
              var e = !1;
              setTimeout(function () {}, 3e3);
            }
          }
          "auto" == ha &&
            setTimeout(function () {
              "auto" == ha && (ha = "off");
            }, 1e3);
          $a = !0;
          b.addClass("dzsap-loaded");
          0 == isNaN(Number(a.default_volume))
            ? ((a.default_volume = Number(a.default_volume)),
              (vb = a.default_volume))
            : "last" == a.default_volume &&
              (vb =
                null != localStorage && B
                  ? localStorage.getItem("dzsap_last_volume_" + B)
                    ? localStorage.getItem("dzsap_last_volume_" + B)
                    : 1
                  : 1);
          a.volume_from_gallery && (vb = a.volume_from_gallery);
          Ha(vb, { call_from: "from_init_loaded" });
          "number" == typeof U && 0 == Math.round(U) % 1 && Ia(U);
          "last" == U &&
            "undefined" != typeof Storage &&
            (setTimeout(function () {
              Ob = !0;
            }),
            "undefined" != typeof localStorage["dzsap_" + B + "_lastpos"] &&
              Ia(localStorage["dzsap_" + B + "_lastpos"]));
          1 != g.do_not_autoplay && 0 == is_ie8() && "on" == a.autoplay && ca();
          wb();
          setTimeout(function () {
            b.find(".wave-download").bind("click", lb);
          }, 500);
        }
      }
      function Ja(a) {
        return "undefined" != typeof a && "" != a;
      }
      function lb(a) {
        var b = c(this);
        "click" == a.type && b.hasClass("wave-download") && ja();
      }
      function Ea(a) {
        var g = c(this);
        if (0 != b.has(g).length) {
          if ("mouseout" == a.type || "mouseleave" == a.type)
            b.find(".star-rating-prog-clip").css({ width: 0 }),
              b.find(".star-rating-set-clip").css({ opacity: 1 });
          if ("mousemove" == a.type) {
            var l = a.pageX - g.offset().left;
            g.offset();
            xa = -1 < wa ? wa : l / (g.outerWidth() / 5);
            xa = 4 < xa ? 5 : Math.round(xa);
            b.find(".star-rating-prog-clip").css({
              width: (g.outerWidth() / 5) * xa,
            });
            b.find(".star-rating-set-clip").css({ opacity: 0 });
          }
          "click" != a.type || -1 < wa || ea(xa);
        }
      }
      function xb(b) {
        P.get(0).width = P.width();
        P.get(0).height = P.height();
        Qa && ((Qa.get(0).width = P.width()), (Qa.get(0).height = P.height()));
        "on" == a.skinwave_enableReflect &&
          ((qb.get(0).width = P.width()),
          (qb.get(0).height = P.height()),
          Sa &&
            ((Sa.get(0).width = P.width()), (Sa.get(0).height = P.height())));
        gb.createLinearGradient(0, 0, na, fa);
        gb.clearRect(0, 0, na, fa);
        gb.fillStyle = "#" + a.skinwave_spectrum_wavesbg;
        Ra &&
          (Ra.clearRect(0, 0, na, fa),
          (Ra.fillStyle = "#" + a.skinwave_spectrum_wavesprog));
        for (var c = 0; c < b.length; c++) {
          var l = b[c];
          gb.fillRect((c / 256) * na, fa - (l / 256) * fa, na / b.length, fa);
          Ra &&
            Ra.fillRect((c / 256) * na, fa - (l / 256) * fa, na / b.length, fa);
        }
        "on" == a.skinwave_enableReflect &&
          (Gb.clearRect(0, 0, na, fa),
          Gb.drawImage(P.get(0), 0, 0),
          Sa && (Hb.clearRect(0, 0, na, fa), Hb.drawImage(Qa.get(0), 0, 0)));
      }
      function ec() {
        a.parentgallery &&
          "undefined" != typeof a.parentgallery.get(0) &&
          a.parentgallery.get(0).api_goto_prev();
      }
      function fc() {
        a.parentgallery &&
          "undefined" != typeof a.parentgallery.get(0) &&
          a.parentgallery.get(0).api_goto_next();
      }
      function wb(d) {
        var g = { fire_only_once: !1 };
        d && (g = c.extend(g, d));
        b.attr("id");
        if (eb) return !1;
        Pb && (Pb = !1);
        if (Tb) return !1;
        "youtube" == t &&
          (q &&
            q.getDuration &&
            ((mb = q.getDuration()), (Ka = q.getCurrentTime())),
          "last" == U &&
            Ob &&
            "undefined" != typeof Storage &&
            (localStorage["dzsap_" + B + "_lastpos"] = W));
        if ("audio" == t)
          if (1 == K)
            "light" == a.settings_backup_type &&
              "" == Ta &&
              "undefined" != typeof q &&
              (eval(
                "if(typeof _cmedia.fn_getsoundduration" +
                  N +
                  " != 'undefined'){time_total = parseFloat(_cmedia.fn_getsoundduration" +
                  N +
                  "())};"
              ),
              eval(
                "if(typeof _cmedia.fn_getsoundcurrtime" +
                  N +
                  " != 'undefined'){time_curr = parseFloat(_cmedia.fn_getsoundcurrtime" +
                  N +
                  "())};"
              ));
          else if (
            "shoutcast" != a.type &&
            (q && ((mb = q.duration), 0 == Qb && (Ka = q.currentTime)),
            C && is_firefox(),
            "last" == U &&
              Ob &&
              "undefined" != typeof Storage &&
              (localStorage["dzsap_" + B + "_lastpos"] = W),
            "skin-wave" == a.design_skin &&
              "on" == a.skinwave_comments_displayontime)
          ) {
            var l = Math.round((Ka / mb) * 100) / 100;
            E &&
              E.children().each(function () {
                var a = c(this);
                if (a.hasClass("dzstooltip-con")) {
                  var b =
                    Math.round(
                      (parseFloat(a.css("left")) / E.outerWidth()) * 100
                    ) / 100;
                  b &&
                    (0.02 > Math.abs(b - l)
                      ? (E.find(".dzstooltip").removeClass("active"),
                        a.find(".dzstooltip").addClass("active"))
                      : a.find(".dzstooltip").removeClass("active"));
                }
              });
          }
        0 != b.hasClass("first-played") ||
          (b.attr("data-playfrom") && "0" != b.attr("data-playfrom")) ||
          ((Ka = 0),
          c(q) &&
            c(q).html() &&
            -1 < c(q).html().indexOf("api.soundcloud.com") &&
            Ia(0));
        if ("fake" == t || a.fakeplayer)
          0 == H && q && ((H = q.duration), 0 == Qb && (W = q.currentTime)),
            5 == W && (W = 0),
            (Ka = W),
            (mb = H);
        W = Ka;
        H = mb;
        0 < Wa && (W = Wa + Ka);
        0 < nb && (H = nb);
        b.hasClass("is-playing");
        I = (W / H) * D;
        isNaN(I) && (I = 0);
        I > D && (I = D);
        null == ua &&
          (n.children(".scrub-prog").css({ width: I }),
          "on" == a.skinwave_enableReflect &&
            n.children(".scrub-prog-reflect").css({ width: I }));
        Z && Z.get(0).api_seek_to_onlyvisual(W / H);
        if (b.hasClass("skin-minimal"))
          if (is_ie8() || !can_canvas() || is_opera())
            x.addClass("canvas-fallback");
          else {
            d = rb.getContext("2d");
            var e = c(rb).width(),
              h = c(rb).height(),
              f = e / 100,
              k = h / 100;
            I = (W / H) * Math.PI * 2;
            isNaN(I) && (I = 0);
            I > 2 * Math.PI && (I = 2 * Math.PI);
            d.clearRect(0, 0, e, h);
            var m = d.createLinearGradient(0, 0, 0, h),
              e = parseInt(a.design_color_highlight, 16),
              h = e + 40;
            m.addColorStop("0", "#" + e.toString(16));
            m.addColorStop("1.0", "#" + h.toString(16));
            d.beginPath();
            d.arc(50 * f, 50 * k, 40 * f, 0, 2 * Math.PI, !1);
            d.fillStyle = "rgba(0,0,0,0.1)";
            d.fill();
            d.beginPath();
            d.arc(50 * f, 50 * k, 30 * f, 0, 2 * Math.PI, !1);
            d.fillStyle = m;
            d.fill();
            d.beginPath();
            d.arc(50 * f, 50 * k, 34 * f, 0, I, !1);
            d.lineWidth = 10 * f;
            d.strokeStyle = "rgba(0,0,0,0.3)";
            d.stroke();
            d.beginPath();
            d.strokeStyle = "red";
            d.moveTo(44 * f, 40 * f);
            d.lineTo(57 * f, 50 * f);
            d.lineTo(44 * f, 60 * f);
            d.lineTo(44 * f, 40 * f);
            d.fillStyle = "#ddd";
            d.fill();
            d = sb.getContext("2d");
            e = c(sb).width();
            h = c(sb).height();
            f = e / 100;
            k = h / 100;
            d.clearRect(0, 0, e, h);
            d.beginPath();
            d.arc(50 * f, 50 * k, 40 * f, 0, 2 * Math.PI, !1);
            d.fillStyle = "rgba(0,0,0,0.1)";
            d.fill();
            d.beginPath();
            d.arc(50 * f, 50 * k, 30 * f, 0, 2 * Math.PI, !1);
            d.fillStyle = m;
            d.fill();
            d.beginPath();
            d.arc(50 * f, 50 * k, 34 * f, 0, I, !1);
            d.lineWidth = 10 * f;
            d.strokeStyle = "rgba(0,0,0,0.35)";
            d.stroke();
            d.fillStyle = "#ddd";
            d.fillRect(43 * f, 40 * f, 6 * f, 20 * f);
            d.fillRect(53 * f, 40 * f, 6 * f, 20 * f);
          }
        "skin-wave" == a.design_skin &&
          ("on" == a.skinwave_enableSpectrum && Va && xb(Va),
          O &&
            "on" != a.skinwave_timer_static &&
            (O.css({ left: I }),
            I > D - Mb && O.css({ left: D - Mb }),
            I > D - 30
              ? ba.css({ opacity: 1 - (I - (D - 30)) / 30 })
              : "1" != ba.css("opacity") && ba.css({ opacity: "" })));
        O && (O.html(Fb(W)), ba.html(Fb(H)));
        0 < H && W >= H - 0.07 && Yb();
        1 != g.fire_only_once &&
          (1 == K || "youtube" == t
            ? setTimeout(wb, 500)
            : requestAnimFrame(wb));
      }
      function Xb(b) {
        console.log("click_playpause");
        var g = c(this);
        if ("skin-minimal" == a.design_skin) {
          var l = g.offset().left + 50,
            g = g.offset().top + 50,
            e = b.pageX;
          b = b.pageY;
          var f = Math.sqrt(Math.pow(e - l, 2) + Math.pow(b - g, 2)),
            l = 0.005 * -(e - l - 50);
          b < g && (l = 0.5 + (0.5 - l));
          if ((1 != K || !is_firefox()) && 20 < f) {
            Kb(l);
            return;
          }
        }
        0 == pa ? ca() : Ba();
      }
      function Yb() {
        Ia(0);
        if ("on" == a.loop) return ca(), !1;
        Ba();
        a.parentgallery &&
          "undefined" != typeof a.parentgallery &&
          a.parentgallery.get(0).api_handle_end();
        setTimeout(function () {
          if (
            b.hasClass("is-single-player") &&
            0 < dzsap_list_for_sync_players.length
          )
            for (var a in dzsap_list_for_sync_players)
              if (
                dzsap_list_for_sync_players[a].get(0) == b.get(0) &&
                a < dzsap_list_for_sync_players.length - 1
              ) {
                a = parseInt(a, 10);
                var c = dzsap_list_for_sync_players[a + 1].get(0);
                c &&
                  c.api_play_media &&
                  setTimeout(function () {
                    c.api_play_media();
                  }, 200);
              }
        }, 100);
        setTimeout(function () {
          yb && yb(b);
        }, 200);
      }
      function oa(d, g) {
        var l = {};
        g && c.extend(l, g);
        c(window).width();
        L = b.width();
        b.height();
        P && ((na = P.width()), (fa = P.height()));
        720 >= L ? b.addClass("under-720") : b.removeClass("under-720");
        500 >= L ? b.addClass("under-500") : b.removeClass("under-500");
        D = L;
        "skin-default" == a.design_skin && (D = L);
        "skin-pro" == a.design_skin && (D = L);
        "skin-silver" == a.design_skin &&
          ((D = L),
          (D = n.width()),
          "on" == a.scrubbar_tweak_overflow_hidden &&
            ((D = L - J.width() - aa.outerWidth() - 15),
            n.css({ left: J.width(), width: D })));
        "skin-justthumbandbutton" == a.design_skin &&
          (D = L = b.children(".audioplayer-inner").outerWidth());
        if ("skin-redlights" == a.design_skin || "skin-steel" == a.design_skin)
          D = n.width();
        "skin-wave" == a.design_skin &&
          ((D = n.outerWidth(!1)),
          E &&
            ((l = n.offset().left - b.offset().left),
            E.css({ width: D, left: l + "px" }),
            E.addClass("active")),
          b.hasClass("fullflashbackup") &&
            E &&
            (E.css({ width: L - 212, left: 212 }),
            480 >= L && E.css({ width: L - 112, left: 112 }),
            E.addClass("active")));
        1 == Zb &&
          ("skin-default" == a.design_skin &&
            (void 0 != b.get(0) &&
              "auto" == b.get(0).style.height &&
              b.height(200),
            (l = G.height()),
            "undefined" == typeof b.attr("data-initheight") &&
            "" != b.attr("data-initheight")
              ? b.attr("data-initheight", G.height())
              : (l = Number(b.attr("data-initheight"))),
            console.info("cthis_height - ", l, b.attr("data-initheight")),
            "default" == a.design_thumbh && (Pa = l - 44)),
          G.find(".the-thumb").eq(0).css({ height: Pa }));
        "none" != b.css("display") &&
          (n.find(".scrub-bg-img").eq(0).css({}),
          n
            .find(".scrub-prog-img")
            .eq(0)
            .css({ width: n.children(".scrub-bg").width() }),
          n
            .find(".scrub-prog-canvas")
            .eq(0)
            .css({ width: n.children(".scrub-bg").width() }),
          n
            .find(".scrub-prog-img-reflect")
            .eq(0)
            .css({ width: n.children(".scrub-bg").width() }),
          n
            .find(".scrub-prog-canvas-reflect")
            .eq(0)
            .css({ width: n.children(".scrub-bg").width() }));
        b.removeClass("under-240 under-400");
        240 >= L && b.addClass("under-240");
        400 >= L
          ? (b.addClass("under-400"), v && v.hide())
          : "on" == a.disable_volume
          ? v.hide()
          : v.show();
        if ("skin-wave" == a.design_skin) {
          ga = 0;
          0 < b.find(".the-thumb").length &&
            (ga += b.find(".the-thumb").width() + 20);
          ga += 70;
          n.eq(0).height();
          K &&
            "full" == a.settings_backup_type &&
            ((ga = 280), 480 >= L && (ga = 180));
          "small" == a.skinwave_mode &&
            ((ga -= 80), (ga += 13), x.css({}), (ga += x.outerWidth() + 10));
          "small" == a.skinwave_mode &&
            K &&
            "full" == a.settings_backup_type &&
            ((ga = 140), b.find(".meta-artist-con").hide());
          if (A && "none" != A.css("display")) {
            "small" == a.skinwave_mode && (ga += 10);
            if ("skin-wave" != a.design_skin || "small" != a.skinwave_mode)
              A.css({}),
                "skin-wave" == a.design_skin &&
                  "small" != a.skinwave_mode &&
                  A.css({});
            ga += A.outerWidth();
          }
          ya = 0;
          v && "none" != v.css("display") && (ya += 55);
          "small" == a.skinwave_mode &&
            ((ga += 10),
            n.css({}),
            b.find(".btn-menu-state").eq(0).css({ bottom: "auto", top: 25 }),
            "on" == a.scrubbar_tweak_overflow_hidden &&
              n.css({
                left: J.width(),
                width: L - J.width() - aa.outerWidth(),
              }),
            (D = n.width()),
            "on" == a.scrubbar_tweak_overflow_hidden &&
              (D = L - J.width() - aa.outerWidth()),
            (ya += 10),
            n.css({}),
            n.find(".scrub-bg-img").eq(0).css({ width: D }),
            n.find(".scrub-prog-img").eq(0).css({ width: D }));
          "canvas" == a.skinwave_wave_mode &&
            b.attr("data-pcm") &&
            (100 == La.width() && La.width(n.width()),
            u(La.get(0), b.attr("data-pcm"), "#" + a.design_color_bg),
            u(Ya.get(0), b.attr("data-pcm"), "#" + a.design_color_highlight));
        }
        "skin-pro" == a.design_skin &&
          ((ya = 10),
          v && "none" != v.css("display") && (ya += 60),
          ba.css({ left: "auto", right: ya }),
          (ya += 50),
          O.css({ left: "auto", right: ya }));
        "skin-default" == a.design_skin &&
          O &&
          ((l = parseInt(A.css("left"), 10)),
          A.outerWidth(),
          A.css("display"),
          isNaN(l),
          O.css({}),
          ba.css({}));
        "skin-minion" == a.design_skin &&
          ((l =
            parseInt(va.find(".con-playpause").eq(0).offset().left, 10) -
            parseInt(va.eq(0).offset().left, 10) -
            18),
          va.find(".prev-btn").eq(0).css({ top: 0, left: l }),
          (l += 36),
          va.find(".next-btn").eq(0).css({ top: 0, left: l }));
        "on" == a.embedded &&
          window.frameElement &&
          ((l = { height: b.outerHeight() }),
          a.embedded_iframe_id && (l.embedded_iframe_id = a.embedded_iframe_id),
          window.parent.postMessage({ name: "resizeIframe", params: l }, "*"));
      }
      function Ua(d) {
        var g = c(this);
        "mousemove" == d.type &&
          Rb &&
          ((m =
            (d.pageX - v.find(".volume_static").eq(0).offset().left) /
            v.find(".volume_static").eq(0).width()),
          g.parent().hasClass("volume-holder") &&
            (m =
              1 -
              (d.pageY - v.find(".volume_static").eq(0).offset().top) /
                v.find(".volume_static").eq(0).height()),
          "skin-redlights" == a.design_skin &&
            ((m *= 10), (m = Math.round(m)), (m /= 10)),
          Ha(m, { call_from: "set_by_mousemove" }),
          (Xa = !1));
        "click" == d.type &&
          ((m =
            (d.pageX - v.find(".volume_static").eq(0).offset().left) /
            v.find(".volume_static").eq(0).width()),
          g.parent().hasClass("volume-holder") &&
            (m =
              1 -
              (d.pageY - v.find(".volume_static").eq(0).offset().top) /
                v.find(".volume_static").eq(0).height()),
          Ha(m, { call_from: "set_by_mouseclick" }),
          (Xa = !1));
        "mousedown" == d.type &&
          ((Rb = !0),
          b.addClass("volume-dragging"),
          (m =
            (d.pageX - v.find(".volume_static").eq(0).offset().left) /
            v.find(".volume_static").eq(0).width()),
          g.parent().hasClass("volume-holder") &&
            (m =
              1 -
              (d.pageY - v.find(".volume_static").eq(0).offset().top) /
                v.find(".volume_static").eq(0).height()),
          Ha(m, { call_from: "set_by_mousedown" }),
          (Xa = !1));
        "mouseup" == d.type && ((Rb = !1), b.removeClass("volume-dragging"));
      }
      function Jb(b) {
        var g = b.pageX;
        if (
          c(b.target).hasClass("sample-block-start") ||
          c(b.target).hasClass("sample-block-end")
        )
          return !1;
        "mousemove" == b.type &&
          n.children(".scrubBox-hover").css({ left: g - n.offset().left });
        if ("click" == b.type) {
          ua && (H = ua.duration);
          var l = ((b.pageX - n.offset().left) / D) * H;
          1 == K && (l = (b.pageX - n.offset().left) / D);
          0 < Wa && (l -= Wa);
          a.fakeplayer &&
            setTimeout(function () {
              a.fakeplayer.get(0) &&
                a.fakeplayer.get(0).api_pause_media &&
                a.fakeplayer.get(0).api_seek_to_perc(l / H);
            }, 50);
          Ia(l);
          0 == pa && ca();
        }
      }
      function Kb(a) {
        Ia(a * H);
      }
      function Ia(b) {
        "youtube" == t && q.seekTo(b);
        "audio" == t &&
          (null != ua
            ? ((zb = b),
              (C.currentTime = zb),
              0 != Qb && (W = b),
              Ba({ audioapi_setlasttime: !1 }),
              ca())
            : 1 == K
            ? ("light" == a.settings_backup_type &&
                "" == Ta &&
                eval("_cmedia.fn_seek_to" + N + "(" + b + ")"),
              ca())
            : (q.currentTime = b));
      }
      function gc(a) {
        0 == H && q && q.duration && (H = q.duration);
        W = a * H;
      }
      function hc(a) {
        "youtube" == t && q.setPlaybackRate(a);
        "audio" == t && 0 == K && (q.playbackRate = a);
      }
      function Ha(d, g) {
        var l = { call_from: "default" };
        g && c.extend(l, g);
        "youtube" == t && q.setVolume(100 * d);
        "audio" == t &&
          (1 == K
            ? "light" == a.settings_backup_type &&
              "" == Ta &&
              eval("_cmedia.fn_volumeset" + N + "(arg)")
            : (q.volume = d));
        v.hasClass("controls-volume-vertical")
          ? v
              .find(".volume_active")
              .eq(0)
              .css({ height: v.find(".volume_static").eq(0).height() * d })
          : v
              .find(".volume_active")
              .eq(0)
              .css({ width: v.find(".volume_static").eq(0).width() * d });
        "skin-wave" == a.design_skin &&
          "on" == a.skinwave_dynamicwaves &&
          (n
            .find(".scrub-bg-img")
            .eq(0)
            .css({ transform: "scaleY(" + d + ")" }),
          n
            .find(".scrub-prog-img")
            .eq(0)
            .css({ transform: "scaleY(" + d + ")" }),
          "on" == a.skinwave_enableReflect &&
            (0 == d
              ? b.find(".scrub-bg-img-reflect").fadeOut("slow")
              : b.find(".scrub-bg-img-reflect").fadeIn("slow")));
        null != localStorage &&
          B &&
          localStorage.setItem("dzsap_last_volume_" + B, d);
        Lb = d;
      }
      function dc() {
        0 == Xa
          ? (($b = Lb), Ha(0, { call_from: "from_mute" }), (Xa = !0))
          : (Ha($b, { call_from: "from_unmute" }), (Xa = !1));
      }
      function ac() {
        if ("on" != a.design_animateplaypause)
          x.children(".playbtn").css({ display: "block" }),
            x.children(".pausebtn").css({ display: "none" });
        else {
          if (0 == b.hasClass("is-playing")) return !1;
          "skin-redlights" == a.design_skin || "skin-steel" == a.design_skin
            ? (x.children(".pausebtn").css("opacity", 1),
              x
                .children(".pausebtn")
                .animate({ opacity: "0" }, { queue: !1, duration: 300 }),
              x
                .children(".playbtn")
                .css({ opacity: 0, visibility: "visible", display: "block" }),
              x
                .children(".playbtn")
                .animate({ opacity: "1" }, { queue: !1, duration: 300 }))
            : (x.children(".playbtn").stop().fadeIn("fast"),
              x.children(".pausebtn").stop().fadeOut("fast"));
        }
        b.removeClass("is-playing");
        pa = !1;
      }
      function Ba(d) {
        var g = { audioapi_setlasttime: !0, donot_change_media: !1 };
        if (eb) return !1;
        d && (g = c.extend(g, d));
        ac();
        1 != g.donot_change_media && null != a.fakeplayer
          ? setTimeout(function () {
              a.fakeplayer.get(0) &&
                a.fakeplayer.get(0).api_pause_media &&
                a.fakeplayer.get(0).api_pause_media();
            }, 100)
          : ("youtube" == t && q.pauseVideo(),
            "audio" == t &&
              (null != ua
                ? "placeholder" != ua &&
                  (1 == g.audioapi_setlasttime && (zb = C.currentTime),
                  ma.stop(0))
                : 1 == K &&
                  "light" == a.settings_backup_type &&
                  "none" != b.css("display")
                ? "light" == a.settings_backup_type &&
                  eval("_cmedia.fn_pausemedia" + N + "()")
                : q && void 0 != q.pause && q.pause()),
            Z && Z.get(0).api_pause_media_visual());
        pa = !1;
        b.removeClass("is-playing");
      }
      function bc(d) {
        "on" != a.design_animateplaypause
          ? (x.children(".playbtn").css({ display: "none" }),
            x.children(".pausebtn").css({ display: "block" }))
          : "skin-redlights" == a.design_skin || "skin-steel" == a.design_skin
          ? (x.children(".playbtn").css("opacity", 1),
            x
              .children(".playbtn")
              .animate({ opacity: "0" }, { queue: !1, duration: 600 }),
            x
              .children(".pausebtn")
              .css({ opacity: 0, visibility: "visible", display: "block" }),
            x
              .children(".pausebtn")
              .animate({ opacity: "1" }, { queue: !1, duration: 600 }))
          : (x.children(".playbtn").stop().fadeOut("fast"),
            x.children(".pausebtn").stop().fadeIn("fast"));
        pa = !0;
        b.addClass("is-playing");
        b.addClass("first-played");
        Ab && Ab(b);
        Sb && Sb(b);
      }
      function ca(d) {
        var g = { api_report_play_media: !0 };
        d && (g = c.extend(g, d));
        0 == b.hasClass("media-setuped") &&
          console.info("warning: media not setuped, there might be issues");
        for (S = 0; S < dzsap_list.length; S++)
          is_ie8() ||
            "undefined" == typeof dzsap_list[S].get(0) ||
            "undefined" == typeof dzsap_list[S].get(0).api_pause_media ||
            dzsap_list[S].get(0) == b.get(0) ||
            (dzsap_list[S].data("type_audio_stop_buffer_on_unfocus") &&
            "on" == dzsap_list[S].data("type_audio_stop_buffer_on_unfocus")
              ? dzsap_list[S].get(0).api_destroy_for_rebuffer()
              : dzsap_list[S].get(0).api_pause_media({
                  audioapi_setlasttime: !1,
                }));
        Nb &&
          (M(),
          "number" == typeof U && 0 == Math.round(U) % 1 && Ia(U),
          (Nb = !1));
        "on" == a.google_analytics_send_play_event &&
          window._gaq &&
          0 == Bb &&
          (window._gaq.push([
            "_trackEvent",
            "ZoomSounds Play",
            "Play",
            "zoomsounds play - " + b.attr("data-source"),
          ]),
          (Bb = !0));
        !window.ga && window.__gaTracker && (window.ga = window.__gaTracker);
        "on" == a.google_analytics_send_play_event &&
          window.ga &&
          0 == Bb &&
          (window.console && console.info("sent event"),
          (Bb = !0),
          window.ga("send", {
            hitType: "event",
            eventCategory: "zoomsounds play - " + b.attr("data-source"),
            eventAction: "play",
            eventLabel: "zoomsounds play - " + b.attr("data-source"),
          }));
        Z && Z.get(0).api_play_media_visual({ api_report_play_media: !1 });
        if (null != a.fakeplayer)
          (d = {
            type: a.type_for_fake_feed,
            fakeplayer_is_feeder: "on",
            call_from: "play_media_audioplayer",
          }),
            a.fakeplayer.get(0).api_change_media(b, d),
            setTimeout(function () {
              a.fakeplayer.get(0) &&
                a.fakeplayer.get(0).api_play_media &&
                a.fakeplayer.get(0).api_play_media();
            }, 100);
        else {
          "youtube" == t && q && q.playVideo && q.playVideo();
          "normal" == t && (t = "audio");
          if ("audio" == t)
            if (null != ua)
              if ("placeholder" != ua)
                (ma = C.createBufferSource()),
                  (ma.buffer = ua),
                  ma.connect(C.destination),
                  ma.connect(V),
                  ma.start(0, zb);
              else return;
            else
              1 == K && "none" != b.css("display")
                ? "light" == a.settings_backup_type &&
                  eval("_cmedia.fn_playmedia" + N + "()")
                : q && "undefined" != typeof q.play && q.play();
          bc(g);
        }
        "off" == ha && la();
      }
      function Fb(a) {
        a = Math.round(a);
        var b = 0;
        if (0 < a) {
          for (; 59 < a && 3e6 > a && isFinite(a); ) b++, (a -= 60);
          return String(
            (10 > b ? "0" : "") + b + ":" + (10 > a ? "0" : "") + a
          );
        }
        return "00:00";
      }
      var b = c(this);
      b.children();
      var N = "ap1",
        S = 0,
        L,
        D = 0,
        I = 0,
        G,
        da = null,
        J = null,
        aa = null,
        va,
        x,
        v,
        n,
        La,
        Ya,
        X,
        q,
        A,
        qb = null,
        Gb = null,
        Sa = null,
        Hb = null,
        P = null,
        gb = null,
        Qa = null,
        Ra = null,
        E = null,
        qa = null,
        O = null,
        ba = null,
        Z = null,
        Za = null,
        pa = !1,
        Xa = !1,
        $a = !1,
        eb = !1,
        Bb = !1,
        Nb = !1,
        H = 0,
        W = 0,
        Ka = 0,
        mb = 0,
        Wa = 0,
        cc = 0,
        nb = 0,
        cb = 0,
        za = 0,
        Mb = 0,
        Q = 0,
        Lb = 1,
        $b = 1,
        B = "",
        kb,
        Qb = 0,
        rb,
        sb,
        K = !1,
        jb = "",
        Ma = "",
        Db = "",
        Zb = !1,
        Pb = !1,
        Rb = !1,
        Eb = !1,
        Ta = "",
        Ga = null,
        C = null,
        ua = null,
        V = null,
        Va = null,
        ma = null,
        na = 100,
        fa = 100,
        Pa,
        t = "",
        fb = 0,
        db = [],
        Wb = "",
        zb = 0,
        ga = 0,
        ya = 0,
        ha = "auto",
        ta = 0,
        xa = 0,
        Ub = 0,
        wa = -1,
        U = "off",
        Ob = !1,
        vb = 1,
        Vb = "127.0.0.1",
        yb = null,
        Ab = null,
        Sb = null,
        Ib = null,
        Tb = !1;
      0 == isNaN(parseInt(a.design_thumbh, 10)) &&
        (a.design_thumbh = parseInt(a.design_thumbh, 10));
      -1 == String(a.design_thumbw).indexOf("%") &&
        (a.design_thumbw = parseInt(a.design_thumbw, 10));
      0 < Number(a.sample_time_start) &&
        ((Wa = Number(a.sample_time_start)),
        0 < Number(a.sample_time_end) &&
          ((cc = Number(a.sample_time_end)),
          0 < Number(a.sample_time_total) &&
            ((nb = Number(a.sample_time_total)),
            (cb = Wa / nb),
            (za = cc / nb))));
      a.settings_trigger_resize = parseInt(a.settings_trigger_resize, 10);
      if (0 < b.children(".extra-html").length && "" == a.settings_extrahtml) {
        a.settings_extrahtml = b.children(".extra-html").eq(0).html();
        var Cb = /{\{ratesubmitted=(.?)}}/g;
        Cb.test(String(a.settings_extrahtml)) &&
          ((Cb.lastIndex = 0),
          (wa = Cb.exec(String(a.settings_extrahtml))[1]),
          (a.settings_extrahtml = String(a.settings_extrahtml).replace(Cb, "")),
          a.parentgallery &&
            void 0 != c(a.parentgallery).get(0) &&
            void 0 != c(a.parentgallery).get(0).api_player_rateSubmitted &&
            c(a.parentgallery).get(0).api_player_rateSubmitted());
        b.children(".extra-html").remove();
      }
      0 < b.children(".extra-html-in-controls-right").length &&
        "" == a.settings_extrahtml_in_float_right &&
        (a.settings_extrahtml_in_float_right = b
          .children(".extra-html-in-controls-right")
          .eq(0)
          .html());
      0 < b.children(".extra-html-in-controls-left").length &&
        "" == a.settings_extrahtml_in_float_left &&
        (a.settings_extrahtml_in_float_left = b
          .children(".extra-html-in-controls-left")
          .eq(0)
          .html());
      (function () {
        "" == a.design_skin && (a.design_skin = "skin-default");
        -1 == b.attr("class").indexOf("skin-") && b.addClass(a.design_skin);
        b.hasClass("skin-default") && (a.design_skin = "skin-default");
        b.hasClass("skin-wave") && (a.design_skin = "skin-wave");
        b.hasClass("skin-justthumbandbutton") &&
          (a.design_skin = "skin-justthumbandbutton");
        b.hasClass("skin-pro") && (a.design_skin = "skin-pro");
        b.hasClass("skin-aria") && (a.design_skin = "skin-aria");
        b.hasClass("skin-silver") && (a.design_skin = "skin-silver");
        b.hasClass("skin-redlights") && (a.design_skin = "skin-redlights");
        b.hasClass("skin-steel") && (a.design_skin = "skin-steel");
        b.hasClass("skin-customcontrols") &&
          (a.design_skin = "skin-customcontrols");
        "on" == b.attr("data-viewsubmitted") && (ha = "on");
        b.attr("data-userstarrating") &&
          (wa = Number(b.attr("data-userstarrating")));
        b.hasClass("skin-minimal") &&
          ((a.design_skin = "skin-minimal"),
          "default" == a.disable_volume && (a.disable_volume = "on"),
          "default" == a.disable_scrub && (a.disable_scrub = "on"),
          (a.disable_timer = "on"));
        b.hasClass("skin-minion") &&
          ((a.design_skin = "skin-minion"),
          "default" == a.disable_volume && (a.disable_volume = "on"),
          "default" == a.disable_scrub && (a.disable_scrub = "on"),
          (a.disable_timer = "on"));
        "skin-default" == a.design_skin &&
          "default" == a.design_thumbh &&
          ((Pa = b.height() - 40), (Zb = !0));
        "skin-wave" == a.design_skin &&
          (b.addClass("skin-wave-mode-" + a.skinwave_mode),
          "small" == a.skinwave_mode &&
            "default" == a.design_thumbh &&
            (Pa = 80),
          b.addClass("skin-wave-wave-mode-" + a.skinwave_wave_mode));
        "skin-justthumbandbutton" == a.design_skin &&
          ("default" == a.design_thumbh && (a.design_thumbh = ""),
          (a.disable_timer = "on"),
          (a.disable_volume = "on"),
          "default" == a.design_animateplaypause &&
            (a.design_animateplaypause = "on"));
        "skin-redlights" == a.design_skin &&
          ((a.disable_timer = "on"),
          (a.disable_volume = "off"),
          "default" == a.design_animateplaypause &&
            (a.design_animateplaypause = "on"));
        "skin-steel" == a.design_skin &&
          ("default" == a.disable_timer && (a.disable_timer = "off"),
          (a.disable_volume = "on"),
          "default" == a.design_animateplaypause &&
            (a.design_animateplaypause = "on"),
          "default" == a.disable_scrub && (a.disable_scrub = "on"));
        "skin-customcontrols" == a.design_skin &&
          ("default" == a.disable_timer && (a.disable_timer = "on"),
          (a.disable_volume = "on"),
          "default" == a.design_animateplaypause &&
            (a.design_animateplaypause = "on"),
          "default" == a.disable_scrub && (a.disable_scrub = "on"));
        "canvas" == a.skinwave_wave_mode &&
          ((a.skinwave_enableReflect = "off"),
          b.addClass("skin-wave-no-reflect"));
        "off" == a.skinwave_enableReflect && b.addClass("skin-wave-no-reflect");
        "default" == a.design_thumbh && (Pa = 200);
        "" == a.embed_code &&
          0 < b.find("div.feed-embed-code").length &&
          (a.embed_code = b.find("div.feed-embed-code").eq(0).html());
        "default" == a.design_animateplaypause &&
          (a.design_animateplaypause = "off");
        "on" == a.design_animateplaypause &&
          b.addClass("design-animateplaypause");
        "" == a.skinwave_comments_playerid
          ? "undefined" != typeof b.attr("id") && (B = b.attr("id"))
          : ((B = a.skinwave_comments_playerid),
            "undefined" == typeof b.attr("id") && b.attr("id", B));
        "" == B && (a.skinwave_comments_enable = "off");
        b.attr("data-fakeplayer") &&
          b.attr("data-type") &&
          0 == (is_android() || is_ios()) &&
          ((a.fakeplayer = c(b.attr("data-fakeplayer")).eq(0)),
          (a.type_for_fake_feed = b.attr("data-type")),
          b.attr("data-type", "fake"),
          (t = a.type = "fake"));
        "on" == a.construct_player_list_for_sync &&
          0 == dzsap_list_for_sync_sw_build &&
          ((dzsap_list_for_sync_players = []),
          (dzsap_list_for_sync_sw_build = !0),
          c(
            ".audioplayer.is-single-player,.audioplayer-tobe.is-single-player"
          ).each(function () {
            var a = c(this);
            dzsap_list_for_sync_players.push(a);
          }),
          clearTimeout(dzsap_list_for_sync_inter_build),
          (dzsap_list_for_sync_inter_build = setTimeout(function () {
            dzsap_list_for_sync_sw_build = !1;
          }, 500)));
        U = a.playfrom;
        Ja(b.attr("data-playfrom")) && (U = b.attr("data-playfrom"));
        0 == isNaN(parseInt(U, 10)) && (U = parseInt(U, 10));
        console.info(
          "inited - ",
          B,
          " skinwave_comments_enable - ",
          a.skinwave_comments_enable,
          b
        );
        "youtube" == b.attr("data-type") && (t = a.type = "youtube");
        "soundcloud" == b.attr("data-type") && (t = a.type = "soundcloud");
        "shoutcast" == b.attr("data-type") &&
          ((a.type = "shoutcast"),
          (t = "audio"),
          (a.disable_timer = "on"),
          "skin-default" == a.design_skin && (a.disable_scrub = "on"));
        "" == t && (t = "audio");
        Ma = b.attr("data-source");
        "audio" == t && (Ma = b.attr("data-source"));
        if (!b.hasClass("audioplayer")) {
          N =
            void 0 != b.attr("id") ? b.attr("id") : "ap" + dzsap_globalidind++;
          is_ie8() && "off" == a.cue && (a.cue = "on");
          b.removeClass("audioplayer-tobe");
          b.addClass("audioplayer");
          if (
            0 < b.find(".the-comments").length &&
            0 < b.find(".the-comments").eq(0).children().length
          )
            db = b.find(".the-comments").eq(0).children();
          else if ("on" == a.skinwave_comments_retrievefromajax) {
            var d = {
              action: "dzsap_get_comments",
              postdata: "1",
              playerid: B,
            };
            a.settings_php_handler &&
              c.ajax({
                type: "POST",
                url: a.settings_php_handler,
                data: d,
                success: function (a) {
                  b.prependOnce(
                    '<div class="the-comments"></div>',
                    ".the-comments"
                  );
                  -1 < a.indexOf("a-comment") &&
                    ((a = a.replace(/a-comment/g, "a-comment dzstooltip-con")),
                    (a = a.replace(
                      /dzstooltip arrow-bottom/g,
                      "dzstooltip arrow-from-start transition-slidein arrow-bottom"
                    )));
                  b.find(".the-comments").eq(0).html(a);
                  db = b.find(".the-comments").eq(0).children();
                  ia();
                },
                error: function (a) {
                  "undefined" != typeof window.console &&
                    console.log("Got this from the server: " + a, a);
                },
              });
          }
          "canvas" != a.skinwave_wave_mode ||
            b.attr("data-pcm") ||
            ((d = { action: "dzsap_get_pcm", postdata: "1", playerid: B }),
            a.settings_php_handler &&
              c.ajax({
                type: "POST",
                url: a.settings_php_handler,
                data: d,
                success: function (a) {
                  b.attr("data-pcm", a);
                },
                error: function (a) {
                  "undefined" != typeof window.console &&
                    console.log("Got this from the server: " + a, a);
                },
              }));
          if (is_ios() || is_android())
            (a.autoplay = "off"),
              (a.disable_volume = "on"),
              "off" == a.cue && (a.cue = "on"),
              (a.cue = "on");
          if ("youtube" == t && 0 == dzsap_ytapiloaded) {
            d = document.createElement("script");
            d.src = "https://www.youtube.com/iframe_api";
            var g = document.getElementsByTagName("script")[0];
            g.parentNode.insertBefore(d, g);
            dzsap_ytapiloaded = !0;
          }
          jb = b.attr("data-source");
          void 0 != b.attr("data-source") &&
            -1 <
              String(b.attr("data-source")).indexOf(
                "https://soundcloud.com/"
              ) &&
            (t = "soundcloud");
          if ("soundcloud" == t) {
            "" == a.soundcloud_apikey &&
              alert("soundcloud api key not defined, read docs!");
            d =
              "http://api.soundcloud.com/resolve?url=" +
              jb +
              "&format=json&consumer_key=" +
              a.soundcloud_apikey;
            if (
              ("skin-wave" == a.design_skin && !b.attr("data-scrubbg")) ||
              is_ie8()
            )
              a.skinwave_enableReflect = "off";
            d = encodeURIComponent(d);
            c.getJSON(a.php_retriever + "?scurl=" + d, function (d) {
              t = "audio";
              "skin-wave" == a.design_skin &&
                void 0 == b.attr("data-scrubbg") &&
                "canvas" != a.skinwave_wave_mode &&
                (b.attr("data-scrubbg", d.waveform_url),
                b.attr("data-scrubprog", d.waveform_url),
                n
                  .find(".scrub-bg")
                  .eq(0)
                  .append('<div class="scrub-bg-div"></div>'),
                n
                  .find(".scrub-bg")
                  .eq(0)
                  .append(
                    '<img src="' +
                      b.attr("data-scrubbg") +
                      '" class="scrub-bg-img"/>'
                  ),
                n
                  .children(".scrub-prog")
                  .eq(0)
                  .append('<div class="scrub-prog-div"></div>'),
                n.find(".scrub-bg").css({ top: 0 }));
              Db = b.attr("data-source");
              b.attr(
                "data-source",
                d.stream_url +
                  "?consumer_key=" +
                  a.soundcloud_apikey +
                  "&origin=localhost"
              );
              Ma = b.attr("data-source");
              "canvas" == a.skinwave_wave_mode && 0 == Eb && bb();
              "on" == a.cue && M();
            });
          }
          if (
            (0 == can_play_mp3() && void 0 == b.attr("data-sourceogg")) ||
            is_ie8() ||
            "on" == a.settings_useflashplayer
          )
            K = !0;
          Da();
          "on" == a.scrubbar_tweak_overflow_hidden
            ? b.addClass("scrubbar-tweak-overflow-hidden-on")
            : b.removeClass("scrubbar-tweak-overflow-hidden-on");
          "skin-wave" != a.design_skin ||
            ("audio" != t && "soundcloud" != t && "fake" != t) ||
            "on" != a.skinwave_comments_enable ||
            ((d = '<div class="comments-holder">'),
            (d = a.skinwave_comments_links_to
              ? d +
                ('<a href="' +
                  a.skinwave_comments_links_to +
                  '" target="_blank" class="the-bg"></a>')
              : d + '<div class="the-bg"></div>'),
            b.appendOnce(
              d +
                '</div><div class="clear"></div><div class="comments-writer"><div class="comments-writer-inner"><div class="setting"><div class="setting-label"></div><textarea name="comment-text" placeholder="Your comment.." type="text" class="comment-input"></textarea><div class="float-right"><button class="submit-ap-comment dzs-button float-right">Submit</button><button class="cancel-ap-comment dzs-button float-right">Cancel</button></div><div class="overflow-it"><input placeholder="Your email.." name="comment-email" type="text" class="comment-input"/></div><div class="clear"></div></div></div></div>'
            ),
            (E = b.find(".comments-holder").eq(0)),
            (qa = b.find(".comments-writer").eq(0)),
            ia(),
            E.find(".the-bg").bind("click", Oa),
            qa.find(".cancel-ap-comment").bind("click", h),
            qa.find(".submit-ap-comment").bind("click", f));
          "" != a.settings_extrahtml &&
            b.append(
              '<div class="extra-html">' + a.settings_extrahtml + "</div>"
            );
          "youtube" == t &&
            (dzsap_list && dzsap_list.push(b),
            X.append('<div id="ytplayer_' + N + '"></div>'),
            (b.get(0).fn_yt_ready = k),
            window.YT && k());
          "on" == a.autoplay && "on" == a.cue && (ta = 1);
          "youtube" == t && is_ios()
            ? (200 > b.height() && b.height(200),
              (d =
                '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' +
                jb +
                '" frameborder="0" allowfullscreen></iframe>'),
              b.html(d))
            : ("on" == a.cue && "soundcloud" != t
                ? ((is_android() || is_ios()) &&
                    b.find(".playbtn").bind("click", ca),
                  M())
                : (b.find(".playbtn").bind("click", ka),
                  b.find(".scrubbar").bind("click", ka),
                  oa()),
              setInterval(function () {
                Pb = !0;
              }, 1e3),
              (b.get(0).api_destroy = Aa),
              (b.get(0).api_play = ca),
              (b.get(0).api_get_last_vol = Fa),
              (b.get(0).api_click_for_setup_media = ka),
              (b.get(0).api_handleResize = oa),
              (b.get(0).api_set_playback_speed = hc),
              (b.get(0).api_change_media = F),
              (b.get(0).api_seek_to_perc = Kb),
              (b.get(0).api_seek_to_onlyvisual = gc),
              (b.get(0).api_set_volume = Ha),
              (b.get(0).api_destroy_listeners = p),
              (b.get(0).api_pause_media = Ba),
              (b.get(0).api_pause_media_visual = ac),
              (b.get(0).api_play_media = ca),
              (b.get(0).api_play_media_visual = bc),
              (b.get(0).api_change_visual_target = y),
              (b.get(0).api_change_design_color_highlight = z),
              (b.get(0).api_set_action_audio_play = function (a) {
                Ab = a;
              }),
              (b.get(0).api_set_action_audio_end = function (a) {
                yb = a;
              }),
              (b.get(0).api_set_action_audio_comment = function (a) {
                Ib = a;
              }),
              a.action_audio_play && (Ab = a.action_audio_play),
              a.action_audio_play2 && (Sb = a.action_audio_play2),
              a.action_audio_end && (yb = a.action_audio_end),
              "skin-minimal" == a.design_skin && wb({ fire_only_once: !0 }),
              c(window).bind("resize", oa),
              oa(),
              b.find(".prev-btn").eq(0).bind("click", ec),
              b.find(".next-btn").eq(0).bind("click", fc),
              b.find(".btn-menu-state").eq(0).bind("click", Na));
        }
      })();
      Math.easeOutQuart = function (a, b, c, e) {
        a /= e;
        a--;
        return -c * (a * a * a * a - 1) + b;
      };
      Math.easeOutQuad = function (a, b, c, e) {
        return ((-c * a) / e) * (a / e - 2) + b;
      };
      Math.easeOutQuad_rev = function (a, b, c, e) {
        return (c * e + e * Math.sqrt(c * (c + b - a))) / c;
      };
      return this;
    });
  };
  window.dzsap_init = function (a, m) {
    if (
      "undefined" != typeof m &&
      "undefined" != typeof m.init_each &&
      1 == m.init_each
    ) {
      var y = 0,
        z;
      for (z in m) y++;
      1 == y && (m = void 0);
      c(a).each(function () {
        c(this).audioplayer(m);
      });
    } else c(a).audioplayer(m);
  };
  c.fn.audiogallery = function (a) {
    if (
      "undefined" == typeof a &&
      "undefined" != typeof c(this).attr("data-options") &&
      "" != c(this).attr("data-options")
    ) {
      var m = c(this).attr("data-options");
      eval("var aux_opts = " + m);
      a = aux_opts;
    }
    Math.easeIn = function (a, c, m, ia) {
      return -m * (a /= ia) * (a - 2) + c;
    };
    a = c.extend(
      {
        design_skin: "skin-default",
        cueFirstMedia: "on",
        autoplay: "off",
        autoplayNext: "on",
        design_menu_position: "bottom",
        design_menu_state: "open",
        design_menu_show_player_state_button: "off",
        design_menu_width: "default",
        design_menu_height: "200",
        design_menu_space: "default",
        design_menuitem_width: "default",
        design_menuitem_height: "default",
        design_menuitem_space: "default",
        disable_menu_navigation: "off",
        enable_easing: "off",
        settings_ap: {},
        transition: "fade",
        embedded: "off",
        settings_mode: "mode-normal",
      },
      a
    );
    this.each(function () {
      function m() {
        var a = r.find(".items").eq(0).children().length;
        for (ea = 0; ea < a; ea++) {
          var c = r.find(".items").children().eq(0);
          Fa.push(c.find(".menu-description").html());
          w.append(c);
        }
        for (ea = 0; ea < Fa.length; ea++)
          (a = ""),
            Fa[ea] &&
              -1 ==
                Fa[ea].indexOf(
                  '<div class="menu-item-thumb-con"><div class="menu-item-thumb" style="'
                ) &&
              (a += " no-thumb"),
            (a = '<div class="menu-item' + a + '">'),
            r.hasClass("skin-aura") &&
              (a += '<div class="menu-item-number">' + (ea + 1) + "</div>"),
            (a += Fa[ea] + "</div>"),
            M.append(a);
      }
      function z() {
        r.addClass("dzsag-loaded");
      }
      function F() {
        if (0 == c(this).hasClass("active")) return alert(ra), !1;
      }
      function ia() {
        "undefined" != typeof w.children().eq(u).get(0) &&
          "undefined" != typeof w.children().eq(u).get(0).api_play_media &&
          w.children().eq(u).get(0).api_play_media();
      }
      function p(c) {
        "mode-showall" == a.settings_mode &&
          ((u = c = w.children(".audioplayer,.audioplayer-tobe").index(c)),
          (r.get(0).currNr_2 = c));
      }
      function Aa() {
        isNaN(Ja) && (Ja = 0);
        lb = Ja;
        xb = Ea - lb;
        Ja = Number(Math.easeIn(1, lb, xb, 20).toFixed(4));
        0 == is_ios() &&
          0 == is_android() &&
          M.css({ transform: "translateY(" + Ja + "px)" });
        requestAnimFrame(Aa);
      }
      function ka() {
        0 == T.height()
          ? T.css({ height: a.design_menu_height })
          : T.css({ height: 0 });
        setTimeout(function () {
          Ca();
        }, 400);
      }
      function Na() {
        ab();
      }
      function Oa() {
        M.children(".menu-item")
          .eq(u)
          .find(".download-after-rate")
          .addClass("active");
      }
      function h() {
        M.children(".menu-item")
          .eq(u)
          .find(".download-after-rate")
          .addClass("active");
      }
      function f() {
        w.css("height", w.children().eq(u).height());
        ja = T.height();
        la = M.outerHeight();
        la > ja && 0 < ja
          ? (T.unbind("mousemove", e), T.bind("mousemove", e))
          : T.unbind("mousemove", e);
        "on" == a.embedded &&
          window.frameElement &&
          (window.frameElement.height = r.height());
      }
      function e(e) {
        var f = c(this);
        f.offset();
        e = e.pageY - f.offset().top;
        la <= ja ||
          ((ja = T.outerHeight()),
          (e = (e / ja) * -(la - ja + 50) + 20),
          0 < e && (e = 0),
          e < -(la - ja + 10) && (e = -(la - ja + 10)),
          (Ea = e),
          0 == is_ios() &&
            0 == is_android() &&
            "on" != a.enable_easing &&
            M.css({ transform: "translateY(" + Ea + "px)" }));
      }
      function k(a) {
        a = c(this);
        a = a.parent().children().index(a);
        Da(a);
      }
      function Ca() {
        setTimeout(function () {
          w.css("height", w.children().eq(u).height());
        }, 500);
        f();
      }
      function ob() {
        w.children().eq(hb).removeClass("transitioning-out");
        w.children().eq(hb).removeClass("active");
        w.children().eq(u).removeClass("transitioning-in");
        hb = u;
        sa = !1;
      }
      function bb() {
        r.parent().children(".the-bg").eq(0).remove();
        sa = !1;
      }
      function pb() {
        Y = u;
        Y--;
        0 > Y && (Y = w.children().length - 1);
        Da(Y);
      }
      function ab() {
        Y = u;
        "mode-showall" == a.settings_mode && (Y = r.get(0).currNr_2);
        Y++;
        Y >= w.children().length && (Y = 0);
        Da(Y);
      }
      function Da(e) {
        if (1 != sa)
          if (("last" == e && (e = w.children().length - 1), u == e))
            w &&
              w.children().eq(u).get(0) &&
              w.children().eq(u).get(0).api_play_media &&
              w.children().eq(u).get(0).api_play_media();
          else {
            R = w.children(".audioplayer,.audioplayer-tobe").eq(e);
            var h = "";
            -1 < u &&
              ("undefined" != typeof w.children().eq(u).get(0) &&
                ("undefined" !=
                  typeof w.children().eq(u).get(0).api_pause_media &&
                  w.children().eq(u).get(0).api_pause_media(),
                "undefined" !=
                  typeof w.children().eq(u).get(0).api_get_last_vol &&
                  (h = w.children().eq(u).get(0).api_get_last_vol())),
              "mode-showall" != a.settings_mode &&
                ("fade" == a.transition &&
                  (w.children().eq(u).removeClass("active"),
                  M.children().eq(u).removeClass("active"),
                  w.children().eq(u).addClass("transitioning-out"),
                  w.children().eq(u).animate({}, { queue: !1 }),
                  setTimeout(ob, 300),
                  (sa = !0)),
                "direct" == a.transition && ob()));
            "sameasgallery" == a.settings_ap.design_skin &&
              (a.settings_ap.design_skin = a.design_skin);
            -1 == u && "on" == a.autoplay && (a.settings_ap.autoplay = "on");
            -1 < u && "on" == a.autoplayNext && (a.settings_ap.autoplay = "on");
            a.settings_ap.parentgallery = r;
            a.settings_ap.design_menu_show_player_state_button =
              a.design_menu_show_player_state_button;
            a.settings_ap.cue = "on";
            1 == tb &&
              ("off" == a.cueFirstMedia && (a.settings_ap.cue = "off"),
              (tb = !1));
            var k = c.extend(a.settings_ap);
            k.volume_from_gallery = h;
            R.hasClass("audioplayer-tobe") && R.audioplayer(k);
            "on" == a.autoplayNext &&
              ("mode-showall" == a.settings_mode && (u = r.get(0).currNr_2),
              -1 < u && R.get(0) && R.get(0).api_play && R.get(0).api_play());
            "mode-showall" != a.settings_mode &&
              ("fade" == a.transition &&
                (R.css({}), R.animate({}, { queue: !1 })),
              R.addClass("transitioning-in"));
            R.addClass("active");
            M.children().eq(e).addClass("active");
            void 0 != R.attr("data-bgimage") &&
              r.parent().hasClass("ap-wrapper") &&
              0 < r.parent().children(".the-bg").length &&
              (r
                .parent()
                .children(".the-bg")
                .eq(0)
                .after(
                  '<div class="the-bg" style="background-image: url(' +
                    R.attr("data-bgimage") +
                    ');"></div>'
                ),
              r.parent().children(".the-bg").eq(0).css({ opacity: 1 }),
              r.parent().children(".the-bg").eq(1).css({ opacity: 0 }),
              r
                .parent()
                .children(".the-bg")
                .eq(1)
                .animate(
                  { opacity: 1 },
                  {
                    queue: !1,
                    duration: 1e3,
                    complete: bb,
                    step: function () {
                      sa = !0;
                    },
                  }
                ),
              (sa = !0));
            "mode-showall" != a.settings_mode && (u = e);
            f();
          }
      }
      var r = c(this);
      r.children();
      var u = -1,
        hb = 0,
        Y = 0,
        sa = !0,
        ea = 0,
        ja,
        la,
        ib,
        w,
        T,
        M,
        R,
        sa = !1,
        tb = !0,
        ub = !1,
        Fa = [],
        ra = "You need to comment or rate before downloading.",
        Ja = 0,
        lb = 0,
        Ea = 0,
        xb = 0;
      window.dzsap_settings &&
        "undefined" != typeof window.dzsap_settings.str_alertBeforeRate &&
        (ra = window.dzsap_settings.str_alertBeforeRate);
      r.get(0).currNr_2 = -1;
      (function () {
        "default" == a.design_menu_width && (a.design_menu_width = "100%");
        "default" == a.design_menu_height && (a.design_menu_height = "200");
        r.addClass(a.settings_mode);
        r.append(
          '<div class="slider-main"><div class="slider-clipper"></div></div>'
        );
        r.addClass("menu-position-" + a.design_menu_position);
        ib = r.find(".slider-main").eq(0);
        var e = r.find(".items").children().length;
        if (0 == e || 1 == e)
          (a.design_menu_position = "none"),
            (a.settings_ap.disable_player_navigation = "on");
        "top" == a.design_menu_position &&
          ib.before(
            '<div class="nav-main"><div class="nav-clipper"></div></div>'
          );
        "bottom" == a.design_menu_position &&
          ib.after(
            '<div class="nav-main"><div class="nav-clipper"></div></div>'
          );
        w = r.find(".slider-clipper").eq(0);
        T = r.find(".nav-main").eq(0);
        M = r.find(".nav-clipper").eq(0);
        r.children(".extra-html").length && r.append(r.children(".extra-html"));
        m();
        "on" == a.disable_menu_navigation && T.hide();
        T.css({ height: a.design_menu_height });
        (is_ios() || is_android()) && T.css({ overflow: "auto" });
        "closed" == a.design_menu_state && T.css({ height: 0 });
        0 == r.css("opacity") && r.animate({ opacity: 1 }, 1e3);
        c(window).bind("resize", Ca);
        Ca();
        setTimeout(Ca, 1e3);
        r.get(0).api_skin_redlights_give_controls_right_to_all = function () {
          ub = !0;
        };
        "mode-normal" == a.settings_mode
          ? Da(Y)
          : (w.children().each(function () {
              var e = c(this),
                f = e
                  .parent()
                  .children(".audioplayer,.audioplayer-tobe")
                  .index(e);
              e.hasClass("audioplayer-tobe") &&
                ((a.settings_ap.parentgallery = r),
                (a.settings_ap.action_audio_play = p),
                e.audioplayer(a.settings_ap),
                (f = String(f + 1)),
                2 > f.length && (f = "0" + f),
                e.before(
                  '<div class="number-wrapper"><span class="the-number">' +
                    f +
                    "</span></div>"
                ),
                e.after('<div class="clear for-number-wrapper"></div>'));
            }),
            "mode-showall" == a.settings_mode &&
              ub &&
              w.children(".audioplayer").each(function () {
                var a = c(this);
                0 ==
                  a
                    .find(".ap-controls-right")
                    .eq(0)
                    .prev()
                    .hasClass("controls-right") &&
                  a
                    .find(".ap-controls-right")
                    .eq(0)
                    .before('<div class="controls-right"> </div>');
              }));
        M.children().bind("click", k);
        r.find(".download-after-rate").bind("click", F);
        r.get(0).api_goto_next = ab;
        r.get(0).api_goto_prev = pb;
        r.get(0).api_goto_item = Da;
        r.get(0).api_handle_end = Na;
        r.get(0).api_toggle_menu_state = ka;
        r.get(0).api_handleResize = Ca;
        r.get(0).api_player_commentSubmitted = Oa;
        r.get(0).api_player_rateSubmitted = h;
        r.get(0).api_reinit = m;
        r.get(0).api_play_curr_media = ia;
        setTimeout(z, 700);
        "on" == a.enable_easing && Aa();
        r.addClass("dzsag-inited");
        r.addClass("transition-" + a.transition);
      })();
    });
  };
  window.dzsag_init = function (a, m) {
    if (
      "undefined" != typeof m &&
      "undefined" != typeof m.init_each &&
      1 == m.init_each
    ) {
      var y = 0,
        z;
      for (z in m) y++;
      1 == y && (m = void 0);
      c(a).each(function () {
        c(this).audiogallery(m);
      });
    } else c(a).audiogallery(m);
  };
})(jQuery);
jQuery(document).ready(function (c) {
  c("audio.zoomsounds-from-audio").each(function () {
    var a = c(this);
    a.after(
      '<div class="audioplayer-tobe auto-init skin-silver" data-source="' +
        a.attr("src") +
        '"></div>'
    );
    a.remove();
  });
  dzsap_init(".audioplayer-tobe.auto-init", { init_each: !0 });
  dzsag_init(".audiogallery.auto-init", { init_each: !0 });
  c(document).delegate(".audioplayer-song-changer", "click", function () {
    var a = c(this),
      m = c(a.attr("data-target")).eq(0);
    m && m.get(0) && m.get(0).api_change_media && m.get(0).api_change_media(a);
    return !1;
  });
  c(document).delegate(".dzsap-sticktobottom .icon-hide", "click", function () {
    var a = c(this);
    c(".dzsap-sticktobottom .dzsap_footer").get(0).api_pause_media();
    a.parent().parent().removeClass("audioplayer-loaded");
    a.parent().parent().addClass("audioplayer-was-loaded");
    return !1;
  });
  c(document).delegate(".dzsap-sticktobottom .icon-show", "click", function () {
    var a = c(this);
    a.parent().parent().addClass("audioplayer-loaded");
    a.parent().parent().removeClass("audioplayer-was-loaded");
    return !1;
  });
  0 < c(".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-silver").length &&
    setInterval(function () {
      c(
        ".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-silver > .audioplayer"
      )
        .eq(0)
        .hasClass("dzsap-loaded") &&
        (c(".dzsap-sticktobottom-placeholder").eq(0).addClass("active"),
        0 == c(".dzsap-sticktobottom").hasClass("audioplayer-was-loaded") &&
          c(
            ".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-silver"
          ).addClass("audioplayer-loaded"));
    }, 1e3);
  0 < c(".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-wave").length &&
    setInterval(function () {
      c(".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-wave > .audioplayer")
        .eq(0)
        .hasClass("dzsap-loaded") &&
        (c(".dzsap-sticktobottom-placeholder").eq(0).addClass("active"),
        0 == c(".dzsap-sticktobottom").hasClass("audioplayer-was-loaded") &&
          c(".dzsap-sticktobottom.dzsap-sticktobottom-for-skin-wave").addClass(
            "audioplayer-loaded"
          ));
    }, 1e3);
});
function is_ios() {
  return (
    -1 != navigator.platform.indexOf("iPhone") ||
    -1 != navigator.platform.indexOf("iPod") ||
    -1 != navigator.platform.indexOf("iPad")
  );
}
function is_android() {
  return -1 < navigator.userAgent.toLowerCase().indexOf("android");
}
function is_ie() {
  return -1 != navigator.appVersion.indexOf("MSIE") ? !0 : !1;
}
function is_firefox() {
  return -1 != navigator.userAgent.indexOf("Firefox") ? !0 : !1;
}
function is_opera() {
  return -1 != navigator.userAgent.indexOf("Opera") ? !0 : !1;
}
function is_chrome() {
  return -1 < navigator.userAgent.toLowerCase().indexOf("chrome");
}
function is_safari() {
  return (
    0 <
    Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor")
  );
}
function version_ie() {
  return parseFloat(navigator.appVersion.split("MSIE")[1]);
}
function version_firefox() {
  if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent))
    return new Number(RegExp.$1);
}
function version_opera() {
  if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent))
    return new Number(RegExp.$1);
}
function is_ie8() {
  return is_ie() && 9 > version_ie() ? !0 : !1;
}
function is_ie9() {
  return is_ie() && 9 == version_ie() ? !0 : !1;
}
function can_play_mp3() {
  var c = document.createElement("audio");
  return !(!c.canPlayType || !c.canPlayType("audio/mpeg;").replace(/no/, ""));
}
function can_canvas() {
  return document.createElement("canvas").getContext("2d") ? !0 : !1;
}
function onYouTubeIframeAPIReady() {
  for (i = 0; i < dzsap_list.length; i++)
    void 0 != dzsap_list[i].get(0) &&
      "undefined" != typeof dzsap_list[i].get(0).fn_yt_ready &&
      dzsap_list[i].get(0).fn_yt_ready();
}
jQuery.fn.textWidth = function () {
  var c = jQuery(this),
    a = c.html();
  "INPUT" == c[0].nodeName && (a = c.val());
  a = '<span class="forcalc">' + a + "</span>";
  jQuery("body").append(a);
  a = jQuery("span.forcalc").last();
  a.css({
    "font-size": c.css("font-size"),
    "font-family": c.css("font-family"),
  });
  c = a.width();
  a.remove();
  return c;
};
window.requestAnimFrame = (function () {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function (c, a) {
      window.setTimeout(c, 1e3 / 60);
    }
  );
})();
var MD5 = function (c) {
  function a(a, c) {
    var e, f, h, k, m;
    h = a & 2147483648;
    k = c & 2147483648;
    e = a & 1073741824;
    f = c & 1073741824;
    m = (a & 1073741823) + (c & 1073741823);
    return e & f
      ? m ^ 2147483648 ^ h ^ k
      : e | f
      ? m & 1073741824
        ? m ^ 3221225472 ^ h ^ k
        : m ^ 1073741824 ^ h ^ k
      : m ^ h ^ k;
  }
  function m(c, e, f, h, k, m, p) {
    c = a(c, a(a((e & f) | (~e & h), k), p));
    return a((c << m) | (c >>> (32 - m)), e);
  }
  function y(c, e, f, h, k, m, p) {
    c = a(c, a(a((e & h) | (f & ~h), k), p));
    return a((c << m) | (c >>> (32 - m)), e);
  }
  function z(c, e, f, h, k, m, p) {
    c = a(c, a(a(e ^ f ^ h, k), p));
    return a((c << m) | (c >>> (32 - m)), e);
  }
  function F(c, e, f, h, k, m, p) {
    c = a(c, a(a(f ^ (e | ~h), k), p));
    return a((c << m) | (c >>> (32 - m)), e);
  }
  function ia(a) {
    var c = "",
      e,
      f;
    for (f = 0; 3 >= f; f++)
      (e = (a >>> (8 * f)) & 255),
        (e = "0" + e.toString(16)),
        (c += e.substr(e.length - 2, 2));
    return c;
  }
  var p = [],
    Aa,
    ka,
    Na,
    Oa,
    h,
    f,
    e,
    k;
  c = (function (a) {
    a = a.replace(/\r\n/g, "\n");
    for (var c = "", e = 0; e < a.length; e++) {
      var f = a.charCodeAt(e);
      128 > f
        ? (c += String.fromCharCode(f))
        : (127 < f && 2048 > f
            ? (c += String.fromCharCode((f >> 6) | 192))
            : ((c += String.fromCharCode((f >> 12) | 224)),
              (c += String.fromCharCode(((f >> 6) & 63) | 128))),
          (c += String.fromCharCode((f & 63) | 128)));
    }
    return c;
  })(c);
  p = (function (a) {
    var c,
      e = a.length;
    c = e + 8;
    for (
      var f = 16 * ((c - (c % 64)) / 64 + 1), h = Array(f - 1), k, m = 0;
      m < e;

    )
      (c = (m - (m % 4)) / 4),
        (k = (m % 4) * 8),
        (h[c] |= a.charCodeAt(m) << k),
        m++;
    c = (m - (m % 4)) / 4;
    h[c] |= 128 << ((m % 4) * 8);
    h[f - 2] = e << 3;
    h[f - 1] = e >>> 29;
    return h;
  })(c);
  h = 1732584193;
  f = 4023233417;
  e = 2562383102;
  k = 271733878;
  for (c = 0; c < p.length; c += 16)
    (Aa = h),
      (ka = f),
      (Na = e),
      (Oa = k),
      (h = m(h, f, e, k, p[c + 0], 7, 3614090360)),
      (k = m(k, h, f, e, p[c + 1], 12, 3905402710)),
      (e = m(e, k, h, f, p[c + 2], 17, 606105819)),
      (f = m(f, e, k, h, p[c + 3], 22, 3250441966)),
      (h = m(h, f, e, k, p[c + 4], 7, 4118548399)),
      (k = m(k, h, f, e, p[c + 5], 12, 1200080426)),
      (e = m(e, k, h, f, p[c + 6], 17, 2821735955)),
      (f = m(f, e, k, h, p[c + 7], 22, 4249261313)),
      (h = m(h, f, e, k, p[c + 8], 7, 1770035416)),
      (k = m(k, h, f, e, p[c + 9], 12, 2336552879)),
      (e = m(e, k, h, f, p[c + 10], 17, 4294925233)),
      (f = m(f, e, k, h, p[c + 11], 22, 2304563134)),
      (h = m(h, f, e, k, p[c + 12], 7, 1804603682)),
      (k = m(k, h, f, e, p[c + 13], 12, 4254626195)),
      (e = m(e, k, h, f, p[c + 14], 17, 2792965006)),
      (f = m(f, e, k, h, p[c + 15], 22, 1236535329)),
      (h = y(h, f, e, k, p[c + 1], 5, 4129170786)),
      (k = y(k, h, f, e, p[c + 6], 9, 3225465664)),
      (e = y(e, k, h, f, p[c + 11], 14, 643717713)),
      (f = y(f, e, k, h, p[c + 0], 20, 3921069994)),
      (h = y(h, f, e, k, p[c + 5], 5, 3593408605)),
      (k = y(k, h, f, e, p[c + 10], 9, 38016083)),
      (e = y(e, k, h, f, p[c + 15], 14, 3634488961)),
      (f = y(f, e, k, h, p[c + 4], 20, 3889429448)),
      (h = y(h, f, e, k, p[c + 9], 5, 568446438)),
      (k = y(k, h, f, e, p[c + 14], 9, 3275163606)),
      (e = y(e, k, h, f, p[c + 3], 14, 4107603335)),
      (f = y(f, e, k, h, p[c + 8], 20, 1163531501)),
      (h = y(h, f, e, k, p[c + 13], 5, 2850285829)),
      (k = y(k, h, f, e, p[c + 2], 9, 4243563512)),
      (e = y(e, k, h, f, p[c + 7], 14, 1735328473)),
      (f = y(f, e, k, h, p[c + 12], 20, 2368359562)),
      (h = z(h, f, e, k, p[c + 5], 4, 4294588738)),
      (k = z(k, h, f, e, p[c + 8], 11, 2272392833)),
      (e = z(e, k, h, f, p[c + 11], 16, 1839030562)),
      (f = z(f, e, k, h, p[c + 14], 23, 4259657740)),
      (h = z(h, f, e, k, p[c + 1], 4, 2763975236)),
      (k = z(k, h, f, e, p[c + 4], 11, 1272893353)),
      (e = z(e, k, h, f, p[c + 7], 16, 4139469664)),
      (f = z(f, e, k, h, p[c + 10], 23, 3200236656)),
      (h = z(h, f, e, k, p[c + 13], 4, 681279174)),
      (k = z(k, h, f, e, p[c + 0], 11, 3936430074)),
      (e = z(e, k, h, f, p[c + 3], 16, 3572445317)),
      (f = z(f, e, k, h, p[c + 6], 23, 76029189)),
      (h = z(h, f, e, k, p[c + 9], 4, 3654602809)),
      (k = z(k, h, f, e, p[c + 12], 11, 3873151461)),
      (e = z(e, k, h, f, p[c + 15], 16, 530742520)),
      (f = z(f, e, k, h, p[c + 2], 23, 3299628645)),
      (h = F(h, f, e, k, p[c + 0], 6, 4096336452)),
      (k = F(k, h, f, e, p[c + 7], 10, 1126891415)),
      (e = F(e, k, h, f, p[c + 14], 15, 2878612391)),
      (f = F(f, e, k, h, p[c + 5], 21, 4237533241)),
      (h = F(h, f, e, k, p[c + 12], 6, 1700485571)),
      (k = F(k, h, f, e, p[c + 3], 10, 2399980690)),
      (e = F(e, k, h, f, p[c + 10], 15, 4293915773)),
      (f = F(f, e, k, h, p[c + 1], 21, 2240044497)),
      (h = F(h, f, e, k, p[c + 8], 6, 1873313359)),
      (k = F(k, h, f, e, p[c + 15], 10, 4264355552)),
      (e = F(e, k, h, f, p[c + 6], 15, 2734768916)),
      (f = F(f, e, k, h, p[c + 13], 21, 1309151649)),
      (h = F(h, f, e, k, p[c + 4], 6, 4149444226)),
      (k = F(k, h, f, e, p[c + 11], 10, 3174756917)),
      (e = F(e, k, h, f, p[c + 2], 15, 718787259)),
      (f = F(f, e, k, h, p[c + 9], 21, 3951481745)),
      (h = a(h, Aa)),
      (f = a(f, ka)),
      (e = a(e, Na)),
      (k = a(k, Oa));
  return (ia(h) + ia(f) + ia(e) + ia(k)).toLowerCase();
};
function formatTime(c) {
  c = Math.round(c);
  var a = 0;
  if (0 < c) {
    for (; 59 < c; ) a++, (c -= 60);
    return String((10 > a ? "0" : "") + a + ":" + (10 > c ? "0" : "") + c);
  }
  return "00:00";
}
