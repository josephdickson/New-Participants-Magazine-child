/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='http://pitweb.pitzer.edu/the-new-participants/wp-content/uploads/sites/79/2015/05/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'phd_circle',
                            type: 'ellipse',
                            rect: ['0px', '0px', '500px', '500px', 'auto', 'auto'],
                            borderRadius: ["50%", "50%", "50%", "50%"],
                            fill: ["rgba(241,232,211,1.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'medal_left',
                            type: 'image',
                            rect: ['194px', '192px', '111px', '153px', 'auto', 'auto'],
                            opacity: '0',
                            fill: ["rgba(0,0,0,0)",im+"medal.svg",'0px','0px']
                        },
                        {
                            id: 'medal_right',
                            type: 'image',
                            rect: ['194px', '192px', '111px', '153px', 'auto', 'auto'],
                            opacity: '0',
                            fill: ["rgba(0,0,0,0)",im+"medal.svg",'0px','0px'],
                            transform: [[],['45']]
                        },
                        {
                            id: 'trophy',
                            type: 'image',
                            rect: ['142px', '86px', '215px', '327px', 'auto', 'auto'],
                            opacity: '1',
                            fill: ["rgba(0,0,0,0)",im+"trophy.svg",'0px','0px'],
                            transform: [[],['360'],[],['0','0']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '500px', '500px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 1750,
                    autoPlay: true,
                    data: [
                        [
                            "eid22",
                            "left",
                            750,
                            500,
                            "easeOutCirc",
                            "${medal_left}",
                            '194px',
                            '44px'
                        ],
                        [
                            "eid7",
                            "scaleX",
                            500,
                            750,
                            "easeOutBack",
                            "${trophy}",
                            '0',
                            '1'
                        ],
                        [
                            "eid42",
                            "rotateZ",
                            750,
                            1000,
                            "easeOutBack",
                            "${medal_left}",
                            '-45deg',
                            '0deg'
                        ],
                        [
                            "eid24",
                            "opacity",
                            750,
                            500,
                            "easeOutBack",
                            "${medal_right}",
                            '0',
                            '1'
                        ],
                        [
                            "eid9",
                            "scaleY",
                            500,
                            750,
                            "easeOutBack",
                            "${trophy}",
                            '0',
                            '1'
                        ],
                        [
                            "eid2",
                            "scaleY",
                            250,
                            500,
                            "easeOutBounce",
                            "${phd_circle}",
                            '0',
                            '1'
                        ],
                        [
                            "eid1",
                            "scaleX",
                            250,
                            500,
                            "easeOutBounce",
                            "${phd_circle}",
                            '0',
                            '1'
                        ],
                        [
                            "eid40",
                            "rotateZ",
                            750,
                            1000,
                            "easeOutBack",
                            "${medal_right}",
                            '45deg',
                            '0deg'
                        ],
                        [
                            "eid11",
                            "opacity",
                            750,
                            500,
                            "easeOutCirc",
                            "${medal_left}",
                            '0',
                            '1'
                        ],
                        [
                            "eid27",
                            "left",
                            750,
                            500,
                            "easeOutBack",
                            "${medal_right}",
                            '194px',
                            '344px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("awards_icon_edgeActions.js");
})("EDGE-3692120");
