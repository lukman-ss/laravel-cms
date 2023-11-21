<div>
    <livewire:form.input 
    :class_div="'mb-10'"
    :class_label="'form-label mb-3'"
    :label="'Judul Post'"
    :type="'text'"
    :class_input="'form-control'"
    :name="'post_title'"
     />
    <livewire:component.wysiwyg.quill-editor />
    <livewire:form.button 
    :type="'submit'" 
    :button_class="'btn btn-primary'"
    :title="'save'" />
</div>
