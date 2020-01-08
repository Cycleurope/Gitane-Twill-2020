<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.picture" > <a17-mediafield :name="fieldName('picture')" crop-context="picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-locale type="a17-textfield" :attributes="{ label: 'Titre', name: fieldName('side_title'), type: 'text', inStore: 'value' }" ></a17-locale><a17-locale type="a17-textfield" :attributes="{ label: 'Sous-titre', name: fieldName('side_subtitle'), type: 'text', inStore: 'value' }" ></a17-locale><a17-locale type="a17-textfield" :attributes="{ label: 'Contenu', name: fieldName('side_content'), type: 'textarea', required: true, inStore: 'value' }" ></a17-locale><a17-vselect label="Theme" :name="fieldName('block_theme')" :options='[{&quot;value&quot;:&quot;gblock-theme-default&quot;,&quot;label&quot;:&quot;D\u00e9faut (Fond Blanc)&quot;},{&quot;value&quot;:&quot;gblock-theme-nightblue&quot;,&quot;label&quot;:&quot;Night Blue&quot;},{&quot;value&quot;:&quot;gblock-theme-dark&quot;,&quot;label&quot;:&quot;Dark&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
