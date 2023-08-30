<div x-data="{
    name:  @entangle('name'),
    selectedPermissions: @entangle('selectedPermissionIds'),

    selectedPermissionsUpdated(el){
        this.selectedPermissions = this.selectedPermissions.map(str =>  parseInt(str, 10));

        if(!el.checked){
            var itemId = el.getAttribute('itemid');
            this.getChildes(el.value, 0)
        }
    },

    getChildes(itemid, i){
        var elms = document.querySelectorAll(`[parentid='parent-${itemid}']`)
        for (var i = i; i < elms.length; ++i) {
            this.remove([elms[i].value])
            this.getChildes(elms[i].value, 0)
        }
    },

    remove (ids){
        this.selectedPermissions = this.selectedPermissions.filter((id) => !(ids.includes(id+'')));
    },

    save(){
        @this.set('name', this.name)
        @this.set('selectedPermissionIds', this.selectedPermissions)
        @this.save()
    }


}">

    @include('livewire.role.partials.from')
</div>
