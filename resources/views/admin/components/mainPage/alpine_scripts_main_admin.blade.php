<script>
    function getItems() {
        return {
            data: [],
            teams:[],
            isLoading: false,
            fetchData() {
                this.isLoading = true;
                fetch(`/api/admin/main/all`,{
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                })
                    .then(res => {
                        return res.json()
                    })
                    .then(data => {
                        this.isLoading = false;
                        this.data = data;
                        this.teams = data.teams;
                        console.log(data)
                    });

            },
            getCountPlayers() {
                return this.data.players;
            },
            getCountEvents() {
                return this.data.events;
            },
            getCountNews() {
                return this.data.events;
            },
            getCountOrders() {
                return this.data.orders;
            },
            getCountOrdersItem() {
                return this.data.orders_item;
            },
            getTeams() {
                return this.data.teams;
            },
        }

    }
</script>

