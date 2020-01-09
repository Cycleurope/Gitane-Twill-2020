<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.feature" > <a17-mediafield :name="fieldName('feature')" crop-context="feature" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-locale type="a17-textfield" :attributes="{ label: 'Titre', name: fieldName('title'), type: 'text', inStore: 'value' }" ></a17-locale><a17-locale type="a17-wysiwyg" :attributes="{ label: 'Contenu de la feature', name: fieldName('content'), note: 'Description Courte de la feature', maxlength: 400, inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
