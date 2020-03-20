<template>
  <div class="container mt-5">
    <p class="w-full text-2xl">
      Dúvidas mais frequentes:
    </p>
    <div class="flex flex-wrap justify-between items-stretch w-full">

      <div v-for="(post, index) in posts" :key="post" class="p-4 w-1/2">
        <post-resposta
          :title="post.title"
          :url="post.url"
          :imagem="post.imagem"
          :imagem-alt="post.description"
        />
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'ListaRespostas',
    props: {
      posts: {
        default: []
      }
    }
  }
</script>

<style scoped>

</style>
