@extends('layouts.app')

@section('content')
 <div class="container">
  <h1 class="text-center my-5">STATISTICHE ORDINI MENSILI DI UN ANNO</h1>
   <canvas id="myChart"></canvas> 
 </div>

@endsection

@section('scripts')


<script>   
const monthData = @json($monthOrders);

function getMonthName(monthNumber){
    const months = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
    return months[monthNumber-1];
}
const monthName = monthData.map(item => getMonthName(item.month));
const monthTotal = monthData.map(item => item.total);

const ctx = document.getElementById('myChart');    
new Chart(ctx, {     
    type: 'bar',    
    data: {       
        labels: monthName,       
        datasets: [{         
            label: 'ordini per ogni mese',         
            data: monthTotal,         
            borderWidth: 1       
            }]     
            },     
            options: {       
                scales: {         
                y: {           
                    beginAtZero: true         
                }       
                }     
            }   
}); 

</script>
@endsection
