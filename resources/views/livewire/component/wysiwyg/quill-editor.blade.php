<div>
    <div id="kt_docs_quill_basic" name="kt_docs_quill_basic"></div>
    @push('scripts')
        <script>
            var quill = new Quill('#kt_docs_quill_basic', {
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }], // custom button values
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'script': 'sub'}, { 'script': 'super' }], // superscript/subscript
                        [{ 'indent': '-1'}, { 'indent': '+1' }], // outdent/indent
                        [{ 'direction': 'rtl' }], // text direction
                        [{ 'size': ['small', false, 'large', 'huge'] }], // custom dropdown
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        [{ 'color': [] }, { 'background': [] }], // dropdown with defaults from theme
                        [{ 'font': [] }],
                        [{ 'align': [] }],
                        ['link', 'image'],
                        ['clean']
                    ]
                },
                placeholder: 'Type your text here...',
                theme: 'snow' // or 'bubble
            });
        </script>
    @endpush
</div>
