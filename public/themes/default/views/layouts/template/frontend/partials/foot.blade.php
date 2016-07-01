			<footer class = "footerContainerWrapper dark">
			    <ul class="icons">
			      <li><a href="https://twitter.com/MyTailor_Africa" class="mdi mdi-twitter" title="Twitter"><span class="label"></span></a></li>
			      <li><a href="https://www.facebook.com/MyTailorAfrica/" class="mdi mdi-facebook" title="Facebook"><span class="label"></span></a></li>
			      <li><a href="#" class="mdi mdi-instagram"><span class="label"></span></a></li>
			      <li><a href="#" class="mdi mdi-google-plus"><span class="label"></span></a></li>   
			    </ul>
			    <ul class="copyright">
			      <li>&copy; 2016 MyTailor. All rights reserved.</li>
			    </ul>
			</footer>

                <!-- Black Screen -->
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->
            </div>
            <script src="{{ theme('vendor/material-design-lite/material.min.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ theme('js/app.js') }}"></script>

        <!-- Controllers -->
        <script src="{{ theme('js/controllers/frontend/shotsController.js') }}"></script>
        <script src="{{ theme('js/controllers/frontend/ovalController.js') }}"></script>

        <!-- Services -->
        {{-- <script src="{{ theme('js/services/shots.js') }}"></script> --}}
        {{-- <script src="{{ theme('js/services/pages.js') }}"></script> --}}
        <script src="{{ theme('js/script.js') }}"></script>

</body>
</html>
