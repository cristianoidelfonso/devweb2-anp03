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
            $('select').formSelect();
        });

        // $(document).ready(function(){
        //     $('select').formSelect();
        // });
    </script>


    <script>
        @if (session('sucesso'))
            // M.toast( { html: "{{ session('sucesso') }}" } );
            var toastHTML = `<span>{{session('sucesso')}}</span>`;
            M.toast(
                    {
                        html: toastHTML,
                        displayLength: 2500,
                        inDuration: 5,
                        outDuration: 25,
                        classes: 'rounded green accent-4 grey-text text-lighten-5'
                    }
                );
        @endif
    </script>

</body>
</html>
