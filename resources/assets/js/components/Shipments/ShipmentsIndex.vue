<template>
    <div>
        <div class="row" v-for="sh in shipments" track-by="id">
            <div class="col">{{ sh.name }}</div>
            <div class="col">{{ sh.created_at }}</div>
            <div class="col">
                <a :href="/shipment/ + sh.id ">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShipmentsIndex",
        props: ['shipments'],
        created: function () {
            console.log(this.shipments);
        }
    }
</script>

<style scoped>

</style>