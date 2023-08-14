<template>
    <!-- inicio do card de busca-->
    <div class="card mb-3">
        <div class="card-header">{{titulo}}</div>

        <div class="card-body">
            <slot name="conteudo"></slot>
        </div>

        <div class="card-footer">
            <slot name="rodape"></slot>
        </div>
    </div>
    <!-- fim do card de busca -->
</template>

<script>
    export default {
       props: ['titulo']
    }
</script>
