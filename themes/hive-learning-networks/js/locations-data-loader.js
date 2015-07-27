var scripts = document.getElementsByTagName("script");
var src = scripts[scripts.length-1].src;
var pathToTheme = src.split("/").slice(0, -2).join("/");

Handlebars.registerHelper('stripProtocol', function(url) {
  return new Handlebars.SafeString(url.replace("https://","").replace("http://",""));
});

Handlebars.registerHelper('logoLink', function(logo) {
  var result = '<a href="' + logo.link + '"><img src="'+ logo.imgSrc + '"></a>';

  return new Handlebars.SafeString(result);
});

Handlebars.registerHelper('link', function(className, url, text) {
  url  = Handlebars.Utils.escapeExpression(url);
  text = Handlebars.Utils.escapeExpression(text);

  var result = '<a class="' + className + '" href="' + url + '">' + text.replace("https://","").replace("http://","") + '</a>';

  return new Handlebars.SafeString(result);
});

var data = {
  profiles: [
    {
      type: "networks",
      name: "Hive Chicago",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Networks_Chicago.png",
        link: "http://hivechicago.org"
      },
      mainWebsite: "http://hivechicago.org",
      twitterHandle: "@hivechicagobuzz",
      facebookPage: "https://www.facebook.com/hivelearningnetworkchicago",
      descriptionHTML: '<p>The Hive Chicago Learning Network, was founded in 2009 at DePaul University and the Chicago Community Trust (CCT) through grants from the John D. and Catherine T. MacArthur Foundation. Joining the Mozilla family in 2013, they now boast 56 member organizations and steward over $1 Million in project funding opportunities through the Hive Fund for Connected Learning at CCT, still supported by MacArthur and joined by the Burberry Foundation.</p>',
      contacts: [
        {
          name: "Sam Dyson",
          title: "Director",
          imgSrc: pathToTheme + "/img/contacts/SamDyson.jpg",
          email: "sam@mozillafoundation.org",
          twitterHandle: "@samueledyson"
        },
        {
          name: "Robert Friedman",
          title: "Portfolio Strategist",
          imgSrc: pathToTheme + "/img/contacts/RobertFriedman.jpg",
          email: "robert@mozillafoundation.org",
          twitterHandle: "@omnignorant"
        },
        {
          name: "Elsa Rodriguez",
          title: "Programs Manager",
          imgSrc: pathToTheme + "/img/contacts/ElsaRodriguez.jpg",
          email: "elsa@mozillafoundation.org",
          twitterHandle: "@erodizzle"
        }
      ],
    },
    {
      type: "networks",
      name: "Hive NYC",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Networks_NewYork.png",
        link: "http://hivenyc.org"
      },
      mainWebsite: "http://hivenyc.org",
      twitterHandle: "@hivelearningnyc",
      facebookPage: "http://facebook.com/hivelearningnyc",
      descriptionHTML: '<p>Hive NYC was founded in 2009 as part of The MacArthur Foundation’s Digital Media and Learning initiative, and Mozilla became its steward in 2011. It is a thriving network of more than 55 non-profit organizations across the city, who have access to funding to support their work through The Hive Digital Media Learning Fund, a collaborative donor fund in The New York Community Trust.</p>',
      contacts: [
        {
          name: "Leah Gilliam",
          title: "Director",
          imgSrc: pathToTheme + "/img/contacts/LeahGilliam.jpg",
          email: "leah@mozillafoundation.org",
          twitterHandle: "@leahatplay"
        },
        {
          name: "Julia Vallera",
          title: "Programs Manager",
          imgSrc: pathToTheme + "/img/contacts/JuliaVallera.jpg",
          email: "julia@mozillafoundation.org",
          twitterHandle: "@colorwheelz"
        }
      ],
    },
    {
      type: "networks",
      name: "Hive Pittsburgh",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Networks_Pittsburgh.png",
        link: "http://hivepgh.sproutfund.org/"
      },
      mainWebsite: "http://hivepgh.sproutfund.org/",
      otherWebsites: [
        "http://remakelearning.org/blog/"
      ],
      twitterHandle: "@hivepgh",
      facebookPage: "https://www.facebook.com/hivepgh",
      descriptionHTML: '<p>Hive Pittsburgh was established in 2013. Hive Pittsburgh is a program of The Sprout Fund and part of the Pittsburgh Kids+Creativity Network, representing more than 100 organizations including schools, museums, libraries, afterschool programs, and community centers. Lead support for the Hive Learning Network in Pittsburgh is provided by the John D. and Catherine T. MacArthur Foundation and the Grable Foundation.</p>',
      contacts: [
        {
          name: "Cathy Lewis Long",
          title: "Program Director",
          imgSrc: pathToTheme + "/img/contacts/CathyLewisLong.jpg",
          email: "cathy@sproutfund.org",
          twitterHandle: "@cathylewislong"
        },
        {
          name: "Matt Hannigan",
          title: "Co-Director",
          imgSrc: pathToTheme + "/img/contacts/MattHannigan.jpg",
          email: "matt@sproutfund.org"
        },
        {
          name: "Dustin Stiver",
          title: "Program Officer",
          imgSrc: pathToTheme + "/img/contacts/DustinStiver.jpg",
          email: "dustin@sproutfund.org",
          twitterHandle: "@dustinstiver"
        }
      ],
    },
    {
      type: "networks",
      name: "Hive Toronto",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Networks_Toronto.png",
        link: "http://hivetoronto.org"
      },
      mainWebsite: "http://hivetoronto.org",
      twitterHandle: "@hivetoronto",
      facebookPage: "http://facebook.com/hivetoronto",
      descriptionHTML: '<p>Hive Toronto was founded in 2012, and is currently comprised of 42 member organizations from the general Toronto and surrounding areas. Hive Toronto is stewarded by Mozilla, and supported by the Ontario Trillium Foundation (OTF), the Office of the Privacy Commissioner of Canada (OPC), and the Canadian Internet Registration Authority (CIRA).</p>',
      contacts: [
        {
          name: "Simona Ramkisson",
          title: "Project Manager, Hive Learning Networks",
          imgSrc: "http://hivelearningnetworks.org/wp-content/uploads/2014/07/SimonaHeadshot.jpeg",
          email: "simona@mozillafoundation.org",
          twitterHandle: "@simonaramkisson"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Bangalore",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Bangalore.png",
        link: "https://www.facebook.com/HiveBangalore?fref=ts"
      },
      twitterHandle: "@HiveBangalore",
      facebookPage: "https://www.facebook.com/HiveBangalore?fref=ts",
      descriptionHTML: '<p>Mission: To transform the learning landscape by empowering youth and educators to enact Connected Learning through a diverse network of civic and cultural institutions.</p>',
      contacts: [
        {
          name: "Vineel Reddy Pindi",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/VineelReddyPindi.jpg",
          email: "pindivineelreddy@gmail.com",
          twitterHandle: "@vineelreddy"
        },
        {
          name: "Galaxy Kadiyala",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/GalaxyKadiyala.jpg",
          email: "igalaxyk@gmail.com",
          twitterHandle: "@galaxyk"
        },
        {
          name: "Aarati Rao",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/AaratiRao.jpg",
          email: "aaratirao90@gmail.com"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Bay Area",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_BayArea.png",
        link: "http://bayareahive.org/"
      },
      mainWebsite: "http://bayareahive.org/",
      descriptionHTML: '<p>The Hive Bay Area Learning Community was established in 2014 and is led in collaboration with a Founding Committee comprised of the San Francisco Public Library, Friends of the SF Library, KQED, BAVC, California Academy of Sciences and the National Writing Project. Together, they envision the Bay Area as a connected community where members create programs for youth to follow their passions through the integration and application of digital media and technology in adult-supported environments.</p>',
      contacts: [
        {
          name: "Simona Ramkisson",
          title: "Project Manager, Hive Learning Networks",
          imgSrc: "http://hivelearningnetworks.org/wp-content/uploads/2014/07/SimonaHeadshot.jpeg",
          email: "simona@mozillafoundation.org",
          twitterHandle: "@simonaramkisson"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Cascadia",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Cascadia.png",
        link: "https://twitter.com/hivecascadia"
      },
      twitterHandle: "@hivecascadia",
      facebookPage: "",
      descriptionHTML: '<p>Hive Cascadia fosters and promotes creative cross-institutional, cross-disciplinary partnerships that support youth participatory learning and leadership.</p>',
      contacts: [
        {
          name: "Jeffrey Sens",
          title: "Co-Executive Director, Pixel Arts Game Education",
          imgSrc: pathToTheme + "/img/contacts/JeffreySens.jpg",
          email: "jsens@gameeducationpdx.com"
        },
        {
          name: "Sara Ryan",
          title: "Teen Services Specialist, Multnomah County Library",
          imgSrc: pathToTheme + "/img/contacts/SaraRyan.jpg",
          email: "sryan@multcolib.org"
        },
        {
          name: "Kristin Bayans",
          title: "Interpretive Media Specialist, Portland Art Museum",
          imgSrc: pathToTheme + "/img/contacts/KristinBayans.jpg",
          email: "kristin.bayans@pam.org"
        }
      ]
    },
    {
      type: "communities",
      name: "Hive Chattanooga",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Chattanooga.png",
        link: "http://www.mozilla.org/gigabit/"
      },
      mainWebsite: "http://www.mozilla.org/gigabit/",
      otherWebsites: [
        "https://blog.mozilla.org/gigabit/"
      ],
      twitterHandle: "@mozillagigabit",
      descriptionHTML: '<p>Established in 2014, Hive Learning Community in Chattanooga supports connected learning experiences in the Chattanooga, Tennessee metropolitan region. Hive CHA fuels the creation of these learning experiences through the Gigabit Community Fund, a National Science Foundation supported initiative to fund the development of gigabit-enabled workforce development and education applications and associated curricula.  Learn more at <a href="http://mozilla.org/gigabit">mozilla.org/gigabit</a>.</p>',
      contacts: [
        {
          name: "Lindsey Frost Cleary",
          title: "Community Catalyst",
          imgSrc: pathToTheme + "/img/contacts/LindseyFrostCleary.jpg",
          email: "lindsey@mozillafoundaiton.org",
          twitterHandle: "@frostcleary"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Denver",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Denver.png",
        link: "https://www.facebook.com/hivedenverco"
      },
      mainWebsite: "https://www.facebook.com/hivedenverco",
      twitterHandle: "@HiveDenver5280",
      descriptionHTML: '<p>Established in 2014, the Hive Denver Learning Community supports connected learning experiences within the Denver–Boulder corridor. Hive Denver represents connected learning in action; an interconnected platform dedicated to combining and recombining partnerships, practices, and programs for youth, educators, and communities. It is a network buzzing with learning activities that break the boundaries of formal education and workforce preparation. Using design principles, high levels of expertise, and a commitment to engaging youth and educators in making connections between in- and out-of-school environments, Hive Denver acts as a catalyst of connected learning practices and cross-pollinates between industry, organizations, schools, policies, and theories.</p>',
      contacts: [
        {
          name: "Jim Stephens",
          title: "",
          imgSrc: pathToTheme + "/img/contacts/JimStephens.jpg",
          email: "hivedenver@gmail.com",
          twitterHandle: "@rethinktheboxs"
        },
        {
          name: "Sarabeth Berk",
          title: "",
          imgSrc: pathToTheme + "/img/contacts/SarabethBerk.jpg",
          email: "SARABETH_BERK@dpsk12.org",
          twitterHandle: "@sbberk11"
        },
        {
          name: "Paul Kim",
          title: "",
          imgSrc: pathToTheme + "/img/contacts/PaulKim.jpg",
          email: "paul.kim@coloradoacademy.org",
          twitterHandle: "@pjikim"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Kansas City",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Kansas_City.png",
        link: "http://hivekc.org/"
      },
      mainWebsite: "http://hivekc.org/",
      otherWebsites: [
        "https://blog.mozilla.org/gigabit/"
      ],
      twitterHandle: "@mozillagigabit",
      descriptionHTML: '<p>Established  in 2014, Hive Learning Community in Kansas City supports connected  learning experiences in the the Greater Kansas City metropolitan area. Hive KC fuels the creation of these learning experiences through the  Gigabit Community Fund, a National Science Foundation supported initiative to fund the development of gigabit-enabled workforce  development and education applications and associated curricula.  Learn more at <a href="http://mozilla.org/gigabit">mozilla.org/gigabit</a>.</p>',
      contacts: [
        {
          name: "Lindsey Frost Cleary",
          title: "Community Catalyst",
          imgSrc: pathToTheme + "/img/contacts/LindseyFrostCleary.jpg",
          email: "lindsey@mozillafoundaiton.org",
          twitterHandle: "@frostcleary"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Manchester",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Manchester.png",
        link: "http://hivemanchester.net/"
      },
      mainWebsite: "http://hivemanchester.net",
      descriptionHTML: '<p>Hive Manchester is a learning community inspired by the Hive Learning Network Community. Essentially, a Hive Learning Community is a cluster of organisations and individuals coming together, who have a keen interest in engaging the youth of Manchester, and the Hive’s core principles for connected learning experiences. Together, we put on events, which are outside of the traditional classroom and inside creative spaces across the city, that generate fantastic and exciting learning opportunities for the diverse youth population of Manchester!</p>',
      contacts: [
        {
          name: "Steven Flower",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/StevenFlower.jpg",
          email: "stevieflow@gmail.com"
        },
        {
          name: "Damian Payton",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/DamianPayton.png",
          email: "damianjpayton@gmail.com"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Mombasa",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Mombasa.png",
        link: "http://mombasatech.org/"
      },
      mainWebsite: "http://mombasatech.org/",
      facebookPage: "https://www.facebook.com/groups/mombasatech",
      email: "info@mombasatech.org",
      instagram: "http://instagram.com/mombasatech",
      descriptionHTML:
        '<p>Hive Mombasa, inaugurated in 2014 is a program of Mombasa Tech, a community-based organization that aims to represent more than 50 organizations including schools, museums, libraries, after-school programs, and community centers within Mombasa City and its environs.</p>' +
        '<p>Hive Mombasa envisions the city as a connected community where members create programs for youth to follow their passions through the integration and application of digital media and technology in adult-supported environments.</p>',
      contacts: [
        {
          name: "Said Fuad",
          title: "Co-founder | Executive Director",
          imgSrc: pathToTheme + "/img/contacts/SaidFuad.png",
          email: "saidfuad@mombasatech.org",
          twitterHandle: "@saeed_fuad"
        },
        {
          name: "Alifiyah Ganijee",
          title: "Co-founder | Director of Operations",
          imgSrc: pathToTheme + "/img/contacts/AlifiyahGanijee.png",
          email: "alifiyahganijee@mombasatech.org",
          twitterHandle: "@alifyaganijee"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Vancouver",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Vancouver.png",
        link: "http://hivevan.org/"
      },
      mainWebsite: "http://hivevan.org/",
      twitterHandle: "@hivelearningvan",
      descriptionHTML: '<p>The Hive Vancouver Learning Community was established in 2014 as a collaboration between the Vancouver Public Library, the Museum of Vancouver, Open Media, the Vancouver Maker Foundation, Vancouver Community Laboratory, Mozilla Webmaker and other local organizations working to enrich digital learning opportunities in the Greater Vancouver region. This effort brings together educators, technologists, mentors and institutions to design innovative, self-led digital learning experiences for youth and marginalized groups. Through free hands-on events, resources and programmes, the community aims to enrich the local ecosystem of digital opportunities to help Vancouverites develop key 21st-century skills, together.</p>',
      contacts: [
        {
          name: "Helen Lee",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/HelenLee.jpeg",
          email: "hive-van@mozilla.org",
          twitterHandle: "@heli_tomato"
        },
        {
          name: "Dethe Elza",
          title: "Co-founder",
          imgSrc: pathToTheme + "/img/contacts/DetheElza.jpg",
          email: "hive-van@mozilla.org",
          twitterHandle: "@dethe"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Vizag",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Vizag.png",
        link: "https://www.facebook.com/HLCvizag"
      },
      facebookPage: "https://www.facebook.com/HLCvizag",
      descriptionHTML: '<p>Mozilla\'s Hive Vizag Learning Network is a city-wide knowledge lab dedicated to helping youth find and explore their interests. Make! Hack! Learn!</p>',
      contacts: [
        {
          name: "Vikas Burri",
          title: "Program Director",
          imgSrc: pathToTheme + "/img/contacts/VikasBurri.jpeg",
          email: "vikas.burri@gmail.com"
        }
      ],
    },
    {
      type: "communities",
      name: "Hive Waterloo",
      logo: {
        imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Waterloo.png",
        link: "http://www.yocwr.ca/about/"
      },
      mainWebsite: "http://www.yocwr.ca/about/",
      descriptionHTML: '<p>Hive Waterloo is leading the work to increase access to technological learning, and to shine a spotlight on tech learning opportunities, organisations, and facilities in the region of Waterloo-Kitchener. </p>',
      contacts: [
        {
          name: "Stephanie Rozek",
          title: "Co-Founder",
          imgSrc: pathToTheme + "/img/contacts/StephanieRozek.jpg",
          email: "stephanie@yocwr.ca"
        },
        {
          name: "Sean Yo",
          title: "Co-Founder",
          imgSrc: pathToTheme + "/img/contacts/SeanYo.jpg",
          email: "me@seanyo.ca"
        }
      ],
    }
    // {
    //   type: "communities",
    //   name: "",
    //   logo: {
    //     imgSrc: pathToTheme + "/img/hive-logos/",
    //     link: ""
    //   },
    //   mainWebsite: "",
    //   otherWebsites: [
    //     ""
    //   ],
    //   twitterHandle: "@",
    //   facebookPage: "",
    //   descriptionHTML: '<p></p>',
    //   contacts: [
    //     {
    //       name: "",
    //       title: "",
    //       imgSrc: pathToTheme + "/img/contacts/",
    //       email: "",
    //       twitterHandle: "@"
    //     }
    //   ],
    // },
  ]
};

var locationList = {
  networks: [],
  communities: [],
  comingSoon: [
    {
      name: "Hive Barcelona"
    }, {
      name: "Hive Los Angeles"
    }, {
      name: "Hive Pilani"
    }, {
      name: "Hive Providence",
    }
  ]
};

function generateProfileName(name) {
  return name.replace(/\s+/g, '-').toLowerCase();
}

data.profiles.forEach(function(profile) {
  profile["profileName"] = generateProfileName(profile.name);

  var location = profile.name.replace("Hive ", "");
  if (profile.profileName.match("nyc")) {
    location = "New York City";
  }

  locationList[profile.type].push({
    location: location,
    profileName: profile.profileName
  });
});

locationList.comingSoon.forEach(function(comingSoonCity) {
  comingSoonCity["location"] = comingSoonCity.name.replace("Hive ", "");
  comingSoonCity["profileName"] = generateProfileName(comingSoonCity.name);
});

// compile template and fill data into the profile section
var profileSource  = $("#location-profile-template").html();
var profileTemplate = Handlebars.compile(profileSource);
$("#hive-profile-section").html(profileTemplate(data));

// compile template and fill data into the top location nav list
var locationNavSource  = $("#location-nav-template").html();
var locationNavTemplate = Handlebars.compile(locationNavSource);
$("#locations-menu").html(locationNavTemplate(locationList));
