<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image Gauche" name="medias.left_picture" > <a17-mediafield :name="fieldName('left_picture')" crop-context="left_picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-locale type="a17-textfield" :attributes="{ label: 'Légende Gauche', name: fieldName('left_label'), type: 'text', inStore: 'value' }" ></a17-locale><a17-inputframe label="Image Droite" name="medias.right_picture" > <a17-mediafield :name="fieldName('right_picture')" crop-context="right_picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-locale type="a17-textfield" :attributes="{ label: 'Légende Droite', name: fieldName('right_label'), type: 'text', inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
