<script>
new Vue({
el: '#app',

data: {
  items: []
},

computed: {
    totalPrice() {
      return this.items.reduce((total, item) => {
        return total + Number(item.price);
      }, 0);
    }
},

created() {
  this.addItem();
},

methods: {
  addItem() {
    this.items.push({
      description: null,
      price: 0
    });
  }
}
});
<script>
