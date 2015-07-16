<script id="location-profile-template" type="text/x-handlebars-template">
  {{#profiles}}
  <div class="container">
    <div class="hive-profile" data-profile={{profileName}}>
      <div class="row">
        <div class="col-md-12">
          <h3 class="the-hive-name">Hive Kansas City</h3>
        </div>
      </div>
      <div class="row">
        <!-- left half =========================== -->
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6">
              <div class="hive-logo">
                <a href={{logo.link}}>
                  <img src={{logo.imgSrc}} />
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <ul class="no-bullet related-sites">
                {{#if mainWebsite}}<li>{{link "main-website" mainWebsite mainWebsite }}</li>{{/if}}
                {{#if otherWebsites}}
                  {{#each otherWebsites}}
                  <li>{{link "other-sites" this this }}</li>
                  {{/each}}
                {{/if}}
                {{#if twitterHandle}}<li><a class="twitter" href="http://twitter.com/{{twitterHandle}}">{{twitterHandle}}</a></li>{{/if}}
              </ul>
            </div>
          </div>
          <div class="row hive-description">
            <div class="col-md-12">
              <p>
              {{{description}}}
              </p>
            </div>
          </div>
        </div>
        <!-- right half (contacts) =========================== -->
        {{#each contacts}}
        <div class="col-md-4">
          <div class="row contact-card">
            <div class="col-md-4">
              <div class="contact-photo"><img src={{imgSrc}} /></div>
            </div>
            <div class="col-md-8">
              <h4 class="contact-name">{{name}}</h4>
              <div class="contact-title">{{title}}</div>
              <ul class="no-bullet">
                <li><a class="mailbox" href="mailto:{{email}}">{{email}}</a></li>
                {{#if twitterHandle}}<li><a class="twitter" href="http://twitter.com/{{twitterHandle}}">{{twitterHandle}}</a></li>{{/if}}
              </ul>
            </div>
          </div>
        </div>
        {{/each}}
      </div>
    </div>
  </div>
  {{/profiles}}
</script>

<script>
  var pathToTheme = "<?php bloginfo('template_directory') ?>" + "/";
  var source  = $("#location-profile-template").html();
  var template = Handlebars.compile(source);

  Handlebars.registerHelper('link', function(className, text, url) {
    text = Handlebars.Utils.escapeExpression(text);
    url  = Handlebars.Utils.escapeExpression(url);

    var result = '<a class="' + className + '" href="' + url + '">' + text + '</a>';

    return new Handlebars.SafeString(result);
  });

  var data = {
    profiles: [
      {
        profileName: "kansas-city",
        logo: {
          imgSrc: pathToTheme + "/img/hive-logos/Hive_Community_Kansas_City.png",
          link: "http://hivekc.org/"
        },
        mainWebsite: "http://hivekc.org/",
        otherWebsites: [
          "https://blog.mozilla.org/gigabit/"
        ],
        twitterHandle: "@mozillagigabit",
        description: 'Established  in 2014, Hive Learning Community in Kansas City supports connected  learning experiences in the the Greater Kansas City metropolitan area. Hive KC fuels the creation of these learning experiences through the  Gigabit Community Fund, a National Science Foundation supported initiative to fund the development of gigabit-enabled workforce  development and education applications and associated curricula.  Learn more at <a href="http://mozilla.org/gigabit">mozilla.org/gigabit</a>.',
        contacts: [
          {
            name: "Lindsey Frost Cleary",
            title: "Community Catalyst",
            imgSrc: pathToTheme + "/img/contacts/LindseyFrostCleary.jpg",
            email: "lindsey@mozillafoundaiton.org",
            twitterHandle: "@frostcleary"
          }
        ],
      }
    ]
  };

  $("#hive-profile-section").html(template(data));
</script>
