XmlToJson
========================

##URL##
http://resources.cfadigital.com/webservice/xmltojson/XmlToJson.php?xmlUrl=https://www.gov.uk/foreign-travel-advice.atom

## Javascript ##
######access function: ######

    function parseRSS(url, callback) {
        $.ajax({
            url: document.location.protocol + '//resources.cfadigital.com/webservice/xmltojson/XmlToJson.php?xmlUrl=' + encodeURIComponent(url),
            dataType: 'json',
            success: function (data) {
                callback(data);
            }
        });
    }
    

###### Usage: ######

    parseRSS('https://www.gov.uk/foreign-travel-advice.atom', function(data){console.log(data)})

## Responce ##
###### Failed: ######
false

###### Success: ######

    {
        "id": "https://www.gov.uk/foreign-travel-advice",
        "link": [
        {
            "@attributes": {
                "rel": "alternate",
                "type": "text/html",
                "href": "https://www.gov.uk/foreign-travel-advice"
            }
        },
        {
            "@attributes": {
                "rel": "self",
                "type": "application/atom+xml",
                "href": "https://www.gov.uk/foreign-travel-advice.atom"
            }
        }
    ],
        "title": "Travel Advice Summary",
        "updated": "2014-07-07T20:34:48+01:00",
        "author": {
        "name": "GOV.UK"
    },
        "entry": [
        {
            "id": "https://www.gov.uk/foreign-travel-advice/the-occupied-palestinian-territories#2014-07-07T20:34:48+01:00",
            "updated": "2014-07-07T20:34:48+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/the-occupied-palestinian-territories"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/the-occupied-palestinian-territories.atom"
                    }
                }
            ],
            "title": "The Occupied Palestinian Territories",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary section - Rockets fired into southern Israel from Gaza"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/israel#2014-07-07T20:34:00+01:00",
            "updated": "2014-07-07T20:34:00+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/israel"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/israel.atom"
                    }
                }
            ],
            "title": "Israel",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary section - Rockets fired into southern Israel from Gaza"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/guatemala#2014-07-07T18:22:09+01:00",
            "updated": "2014-07-07T18:22:09+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/guatemala"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/guatemala.atom"
                    }
                }
            ],
            "title": "Guatemala",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary section - Details of earthquake on 7 July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/lesotho#2014-07-07T17:33:39+01:00",
            "updated": "2014-07-07T17:33:39+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/lesotho"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/lesotho.atom"
                    }
                }
            ],
            "title": "Lesotho",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: reviewed and reissued without amendment"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/sao-tome-and-principe#2014-07-07T17:16:55+01:00",
            "updated": "2014-07-07T17:16:55+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/sao-tome-and-principe"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/sao-tome-and-principe.atom"
                    }
                }
            ],
            "title": "São Tomé and Principe",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: reviewed and reissued without amendment"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/uganda#2014-07-07T16:47:20+01:00",
            "updated": "2014-07-07T16:47:20+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/uganda"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/uganda.atom"
                    }
                }
            ],
            "title": "Uganda",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Safety and security section - violent attacks on 5 July in Bundibugyo, Kasese and Ntoroko districts"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/ukraine#2014-07-07T16:25:45+01:00",
            "updated": "2014-07-07T16:25:45+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/ukraine"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/ukraine.atom"
                    }
                }
            ],
            "title": "Ukraine",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary - shots fired on Independence Square Kyiv on 7 July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/kuwait#2014-07-07T16:09:45+01:00",
            "updated": "2014-07-07T16:09:45+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/kuwait"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/kuwait.atom"
                    }
                }
            ],
            "title": "Kuwait",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary and Safety & security section - recent protests"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/hungary#2014-07-07T15:44:26+01:00",
            "updated": "2014-07-07T15:44:26+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/hungary"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/hungary.atom"
                    }
                }
            ],
            "title": "Hungary",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Safety and security section - removal of advice about Pride march on 5 July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/colombia#2014-07-07T15:42:18+01:00",
            "updated": "2014-07-07T15:42:18+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/colombia"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/colombia.atom"
                    }
                }
            ],
            "title": "Colombia",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary – removal of advice about additional security measures for World Cup game on 4 July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/madagascar#2014-07-07T14:17:55+01:00",
            "updated": "2014-07-07T14:17:55+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/madagascar"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/madagascar.atom"
                    }
                }
            ],
            "title": "Madagascar",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: this advice has been reviewed and reissued without amendment"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/kenya#2014-07-07T12:44:44+01:00",
            "updated": "2014-07-07T12:44:44+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/kenya"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/kenya.atom"
                    }
                }
            ],
            "title": "Kenya",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary – attacks in Lamu and Tana River counties in June and July 2014 "
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/canada#2014-07-07T11:51:20+01:00",
            "updated": "2014-07-07T11:51:20+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/canada"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/canada.atom"
                    }
                }
            ],
            "title": "Canada",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary - removal of advice about tropical storm"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/bahrain#2014-07-07T11:44:21+01:00",
            "updated": "2014-07-07T11:44:21+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/bahrain"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/bahrain.atom"
                    }
                }
            ],
            "title": "Bahrain",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Safety and security section - removal of advice about procession on 6 July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/macedonia#2014-07-07T11:31:18+01:00",
            "updated": "2014-07-07T11:31:18+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/macedonia"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/macedonia.atom"
                    }
                }
            ],
            "title": "Macedonia",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest Update: Summary - daily protests in July"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/somalia#2014-07-07T11:06:02+01:00",
            "updated": "2014-07-07T11:06:02+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/somalia"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/somalia.atom"
                    }
                }
            ],
            "title": "Somalia",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: addition of Entry requirements section"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/sudan#2014-07-07T10:48:21+01:00",
            "updated": "2014-07-07T10:48:21+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/sudan"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/sudan.atom"
                    }
                }
            ],
            "title": "Sudan",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: revised and reissued without amendment"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/taiwan#2014-07-07T10:42:16+01:00",
            "updated": "2014-07-07T10:42:16+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/taiwan"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/taiwan.atom"
                    }
                }
            ],
            "title": "Taiwan",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: revised and reissued without amendment"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/yemen#2014-07-07T10:41:06+01:00",
            "updated": "2014-07-07T10:41:06+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/yemen"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/yemen.atom"
                    }
                }
            ],
            "title": "Yemen",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Safety and Security Section - AQAP attacks in May and June, update on Huthis"
                }
            }
        },
        {
            "id": "https://www.gov.uk/foreign-travel-advice/japan#2014-07-07T10:35:36+01:00",
            "updated": "2014-07-07T10:35:36+01:00",
            "link": [
                {
                    "@attributes": {
                        "rel": "alternate",
                        "type": "text/html",
                        "href": "https://www.gov.uk/foreign-travel-advice/japan"
                    }
                },
                {
                    "@attributes": {
                        "rel": "self",
                        "type": "application/atom+xml",
                        "href": "https://www.gov.uk/foreign-travel-advice/japan.atom"
                    }
                }
            ],
            "title": "Japan",
            "summary": {
                "@attributes": {
                    "type": "xhtml"
                },
                "div": {
                    "p": "Latest update: Summary - Typhoon Neoguri"
                }
            }
        }
    ]
    }
