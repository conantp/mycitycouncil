<?php include 'includes/header.php'; ?>

    <div class="background-overlay">
      <img class="overlay-image" src="/images/city-hall.jpg"/>      
      <div class="jumbotron">
        <h1 class='text-center'>Connect with your Civic Leaders</h1>
        <p class='text-center'>
          Watch Asheville City Council meetings live, and get involved!
        </p>
      </div>
    </div>
    <div class="container theme-showcase" role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class='row'>
        <div class="col-md-12 text-center">
          <p class='lead'>
            
          </p>
        </div>
      </div>

      <div class="row">
      <div class="col-md-7">
      <div class="row moderator-info">
        <div class="col-md-2 text-center">
          <img class="img-circle img-small" src="https://s.gravatar.com/avatar/a4def2213580195a23d94a049dcb5bd1?s=140" alt="" />
        </div>
        <div class="col-md-10"> 
          <p class="bg-primary moderator-text">Tonight's moderator will be Patrick Conant | <a href="https://twitter.com/patrickconant">@patrickconant</a></p>
        </div>
      </div> 
      <div class="row">       

        <!-- Start Live Stream -->
        <!-- ToDo: Don't show if no meeting / show old video links? -->
        <div class="col-md-12">
          <div id='city-stream'>
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class='embed-responsive-item' width="640" height="520" src="http://view.earthchannel.com/PlayerLive.aspx?PGD=ashvnc&appID=1&pWidth=640&pHeight=520&autostart=false" scrolling="no"></iframe>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Today's Agenda</h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><strong>Something important</strong></li>
                  <li>Something else</li>
                </ul>
                <div>
                  <a class="btn btn-info" href='http://www.ashevillenc.gov/Departments/CityClerk/CurrentMeetingAgenda.aspx'>
                    View the Full Agenda
                    <span class="glyphicon glyphicon-list-alt"></span>
                  </a>
                </div>
              </div>
            </div>
           </div>
           <!-- End Live Stream -->
         </div>
       </div>
        </div>
        <div class="col-md-5">
          <!-- Start Disqus -->
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Live Questions</h3><br />
              <p>Use the live questions box to submit your questions.Our moderator will try to ask the most up-voted questions during the public comment session!</p>
            </div>
            <div class="panel-body">
              <div id="disqus_thread"></div>
              <script type="text/javascript">
                  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                  var disqus_shortname = 'mycitycouncil'; // required: replace example with your forum shortname

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
            </div>
          </div>
          <div>
              
              
          </div>
          <!-- End Disqus -->
        </div>
      </div>
    </div> <!-- /container -->

<?php include 'includes/footer.php'; ?>