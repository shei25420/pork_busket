<template>
    <table id="dt-table" class="table table-responsive">
        <thead>
            <tr>
                <th v-for="header in headers"  :key="header">
                    <span style="font-size: 16px;font-variant-caps: petite-caps;font-weight: bold;"> {{ getHeader(header) }} </span>
                </th>
                <th v-if="actions">
                    <span style="font-size: 16px;font-variant-caps: petite-caps;font-weight: bold;">actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in items"  :key="item.id">
                <td v-for="header in headers"  :key="header">
                    <input v-if="header === 'quantity'" type="number"  :data-id="item.id" :value="item.qty ? item.qty : 1" class="form-control" @change.prevent="changeQuantity" min="1">
                    <img v-if="header.includes('image')" class='img-fluid' :src="getItemKey(header, item)" alt="">
                    <span v-else> {{ getItemKey(header, item) }} </span>
                </td>
                <td v-if="actions">
                    <a v-if="actions.indexOf('show') >= 0" href="#" class="mr-2" style="margin-right: 7px;" @click.prevent="$emit('show', item.slug ? item.slug : item.id)"><i class="icofont-eye text-primary"></i></a>
                    <a v-if="actions.indexOf('update') >= 0" href="#" class="mr-2" style="margin-right: 7px;" @click.prevent="$emit('update', item.slug ? item.slug : item.id)"><i class="icofont-eraser text-secondary"></i></a>
                    <a v-if="actions.indexOf('suspend') >= 0" href="#" class="mr-2" style="margin-right: 7px;" @click.prevent="$emit('suspend', item.id)"><i v-if="item.suspended" class="icofont-unlocked text-secondary"></i ><i v-else class="icofont-ssl-security text-secondary"></i></a>
                    <a v-if="actions.indexOf('verify') >= 0 && item.status === 0" href="#" class="mr-2" style="margin-right: 7px;" @click.prevent="$emit('verify', item.id)"><i class="icofont-tick-mark text-success"></i></a>
                    <a v-if="actions.indexOf('cancel') >= 0" href="#" class="mr-2" style="margin-right: 7px;" @click.prevent="$emit('cancel', item.id)"><i class="text-secondary" :class="{'icofont-close-line-circled': item.cancelled === 0}"></i></a>
                    <a v-if="actions.indexOf('site') >= 0 && item.status === 1" :href="`${$protocol}://${item.tenant.domains[0].domain}`" target="__blank" class="mr-2" style="margin-right: 7px;"><i class="icofont-web text-default"></i></a>
                    <a v-if="actions.indexOf('tree') >= 0" class="mr-2" style="margin-right: 7px;" @click.prevent="$router.push({name: 'DistributorTree', params: { id: item.id }})"><i class="icofont-network text-default"></i></a>
                    <a v-if="actions.indexOf('destroy') >= 0" href="#" class="trash" @click.prevent="$emit('destroy', item.id)"><i class="icofont-trash text-danger"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script type="text/javascript">
export default {
    props: ['actions', 'items', 'headers'],
    methods: {
        changeQuantity: function(e) {
            this.$emit('changeQuantity', e.target.value, $(e.target).attr('data-id'));
        },
        getHeader: function (header) {
            header = new String(header);
            if(header.includes('.')) {
                let index = header.lastIndexOf('.');
                header = header.slice(0, index);

                index = header.lastIndexOf('.')
                header = (index > -1) ? header.slice(index + 1) : header;
            }
            if(header.includes('_')) {
                const index = header.indexOf('_');
                // header = header.charAt(index + 1).toUpperCase() + header.slice(1);
                header = header.replace(/_/g, ' ');
            }
            return header;
        },
        getItemKey: function (header, item) {
            let cursor;
            while((cursor = header.indexOf('.')) > -1) {
                item = item[header.slice(0, cursor)]
                header = header.slice(cursor + 1);
            }
            if(header.toLowerCase() === 'created_at' || header.toLowerCase() === 'start_date' || header.toLowerCase() === 'end_date')  return new Date(item[header]).toDateString();
            else if(header.toLowerCase() === 'image_name') return item[header] + '.' + item['extension'];
            return item[header];
        }
    },
    mounted() {
        const dt = $('#dt-table').DataTable({
            responsive: true
        });
        dt.on( 'responsive-display', ( e, datatable, row, showHide, update ) => {
            if(showHide) {
                this.$forceUpdate();
            }
            console.log( 'Details for row '+row.index()+' '+(showHide ? 'shown' : 'hidden') );
        });
    },
};
</script>


