<template>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="#" alt="" width="72" height="72">
        <h2>{{campanha}} Nome da Campanha</h2>
        <p class="lead">Escreva aqui um breve texto explicando como realizar o preenchiemnto da campanha motivando e salientando as principais observações. .</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Expectativa</span>
            <span class="badge badge-secondary badge-pill">R$12.000,000</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Realidade:</h6>
                <small class="text-muted">solidários me ajudem</small>
              </div>
              <span class="text-muted">R$12,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Total de Solidários </h6>
                <small class="text-muted">20%</small>
              </div>
              <span class="text-muted">17</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Finaliza dia </h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">23/06/2019</span>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
                <button type="submit" class="btn btn-secondary">Solidarizar-se</button>
            </div>
          </form>
        </div>

        <div class="col-md-8 order-md-1">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="1007" height="496" src="https://www.youtube.com/embed/gwujqCKcjRE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>


</template>

<script>
    export default {
        data(){
            return {
                campanha: null
            }
        }
    };
</script>
