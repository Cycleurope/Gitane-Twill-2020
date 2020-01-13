<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-textfield" :attributes="{ label: 'Titre', name: fieldName('title'), type: 'text', inStore: 'value' }" ></a17-locale><a17-locale type="a17-textfield" :attributes="{ label: 'URL de la vidéo', name: fieldName('video_url'), type: 'text', inStore: 'value' }" ></a17-locale><a17-inputframe label="Image de background" name="medias.video_background" > <a17-mediafield :name="fieldName('video_background')" crop-context="video_background" >Largeur minimal de l&#039;image : 1800px</a17-mediafield> </a17-inputframe> 
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
