<template>
<div>
<div v-for="post in posts" :key="post.id">
{{post.title}}
</div> 
</div>

</template>

<script>
export default {
    name: 'PostsComponent',
    data(){
    return {
        posts:[]
     }    
    },
    mounted(){
        axios.get('/api/posts').then(({data})=>{
            if(data.success){
                this.posts = data.results;
          }else{
            $this.errorMessage = data.error;
          }     

        })
        
    }

}

</script>

<style lang="scss" scoped>


</style>