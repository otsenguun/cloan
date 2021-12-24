<style>
   .active{
      color:green;
   }
   .tw-primary-color{
      display:none;
   }
   .table{
      margin: 20px 20px 20px 50px;
   }
</style>

<x-app-layout>
   <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
         <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <h4>Хэтэвч</h4>
         </div>
         <ul class="nav justify-content-center">
            <li class="nav-item">
               <a class="nav-link " aria-current="page" href="{{url('wallet')}}">Үлдэгдэл</a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="{{url('wallet/income')}}">Орлого</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('wallet/outcome')}}">Зарлага</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{url('wallet/history')}}">Түүх</a>
            </li>
         </ul>

         <div class="row">
            <div class="col-md-12 text-center">
               <h3>Орлого Зарлага /түүх/</h3>
            </div>
            <div class="col-md-12">
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>№</th>
                           <th>Огноо</th>
                           <th>Валют</th>
                           <th>Хэмжээ</th>
                           <th>Шимтгэл</th>
                           <th>Төлөв</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>2021-11-25</td>
                           <td>MNT</td>
                           <td>2,500,200</td>
                           <td>0</td>
                           <td>Орлого</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>2021-11-26</td>
                           <td>MNT</td>
                           <td>500,000</td>
                           <td>0</td>
                           <td>Орлого</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>2021-11-27</td>
                           <td>MNT</td>
                           <td>500,000</td>
                           <td>0</td>
                           <td>Зарлага</td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>2021-11-30</td>
                           <td>MNT</td>
                           <td>2,500,200</td>
                           <td>0</td>
                           <td>Орлого</td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>2021-11-31</td>
                           <td>MNT</td>
                           <td>1,500,200</td>
                           <td>0</td>
                           <td>Орлого</td>
                        </tr>
                     </tbody>
                  </table>

               </div>
            </div>
         


         </div>
  
      </div>
   </div>
</x-app-layout>