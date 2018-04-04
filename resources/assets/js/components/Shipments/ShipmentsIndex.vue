<template>
    <div>
        <div class="row shipments" v-for="sh in shipments" track-by="id">
            <div class="col">{{ sh.name }}</div>
            <div class="col">{{ sh.created_at }}</div>
            <div class="col">
                <a :href="'/shipment/' + sh.id " class="btn btn-primary" >
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
                <a :href="'/shipment/edit/' + sh.id " class="btn btn-primary" >
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                </a>
                <form class="delete" :action="'/shipment/delete/' + sh.id " method="POST">
                    <input name="_token" :value="csrf_token" type="hidden">
                    <input name="_method" value="DELETE" type="hidden">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShipmentsIndex",
        props: ['shipments','csrf_token'],
        created: function () {
            console.log(this.shipments);
        }
    }
</script>

<style scoped>

</style>