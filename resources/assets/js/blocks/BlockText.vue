<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-textfield" :attributes="{ label: 'Titre', name: fieldName('title'), type: 'text', inStore: 'value' }" ></a17-locale><a17-locale type="a17-wysiwyg" :attributes="{ label: 'Contenu personnalisé', name: fieldName('content'), note: 'Hint message', maxlength: 400, inStore: 'value' }" ></a17-locale><a17-vselect label="Theme" :name="fieldName('theme')" :options='[{&quot;value&quot;:&quot;classic-white&quot;,&quot;label&quot;:&quot;Classic \/ White&quot;},{&quot;value&quot;:&quot;classic-dark&quot;,&quot;label&quot;:&quot;Classic \/ Dark&quot;},{&quot;value&quot;:&quot;tangerine-titled&quot;,&quot;label&quot;:&quot;Classic \/ Tangerine&quot;},{&quot;value&quot;:&quot;tangerine-full&quot;,&quot;label&quot;:&quot;Tangerine \/ Full&quot;},{&quot;value&quot;:&quot;tangerine-yellow-titled&quot;,&quot;label&quot;:&quot;Tangerine \/ Yellow-Titled&quot;},{&quot;value&quot;:&quot;tangerine-dark-titled&quot;,&quot;label&quot;:&quot;Tangerine \/ Dark-Titled&quot;},{&quot;value&quot;:&quot;twitterblue-dark-titled&quot;,&quot;label&quot;:&quot;Twitter Blue \/ Dark-Titled&quot;},{&quot;value&quot;:&quot;twitterblue-light-titled&quot;,&quot;label&quot;:&quot;Twitter Blue \/ Light-Titled&quot;},{&quot;value&quot;:&quot;darkblue-titled&quot;,&quot;label&quot;:&quot;Darkblue-Titled&quot;},{&quot;value&quot;:&quot;darkblue-full&quot;,&quot;label&quot;:&quot;Darkblue \/ Full&quot;},{&quot;value&quot;:&quot;darkblue-twitterblue-titled&quot;,&quot;label&quot;:&quot;Darkblue \/ Twitterblue-Titled&quot;},{&quot;value&quot;:&quot;darkblue-red-titled&quot;,&quot;label&quot;:&quot;Darkblue \/ Red-Titled&quot;},{&quot;value&quot;:&quot;twitterblue-titled&quot;,&quot;label&quot;:&quot;Classic \/ TwitterBlue-Titled&quot;},{&quot;value&quot;:&quot;darkblue-full&quot;,&quot;label&quot;:&quot;Dark Blue \/ Full&quot;},{&quot;value&quot;:&quot;darklime&quot;,&quot;label&quot;:&quot;Dark Lime&quot;},{&quot;value&quot;:&quot;darklime-titled&quot;,&quot;label&quot;:&quot;Dark \/ Lime Titled&quot;},{&quot;value&quot;:&quot;pink-full&quot;,&quot;label&quot;:&quot;Pink \/ Full&quot;},{&quot;value&quot;:&quot;pink-twitterblue-titled&quot;,&quot;label&quot;:&quot;Pink \/ Twitterblue Titled&quot;},{&quot;value&quot;:&quot;pink-titled&quot;,&quot;label&quot;:&quot;Classic - Pink-Titled&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
