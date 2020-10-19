{{-- Rodapé --}}
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
            &copy; {{date('Y')}}
            <a class="grey-text text-lighten-4 right" href="#" hidden>More Links</a>
            <span class="grey-text text-lighten-4 right">Cristiano Idelfonso da Silva</span>
            </div>
        </div>
    </footer>

    <script src="/app-assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>


    <script>
        @if (session('sucesso'))
            // M.toast( { html: "{{ session('sucesso') }}" } );
            var toastHTML = `<span>{{session('sucesso')}}</span>`;
            M.toast({html: toastHTML, classes: 'rounded yellow accent-3  teal-text text-darken-4'});
        @endif
    </script>

</body>
</html>
