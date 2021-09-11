<script>
    function createNewCrontab(){
        showSwal("{{__('Yükleniyor...')}}", 'info');
        let data = new FormData();
        request("{{API('router_crontab')}}", data, function(response){
        
            Swal.close();
          
        }, function(response){
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }
</script>