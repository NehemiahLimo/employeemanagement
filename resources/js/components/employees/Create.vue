<template>
  <div>
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employee</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <p class="">Create Employee</p>
                      <router-link :to="{name:'EmployeesIndex'}" class="float-right" >Back</router-link>
                    </div>

                    <div class="card-body">
                        <form @submit.prevent="storeEmployee" >
                            <div class="form-group row">
                                <label for="first_name"
                                    class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" v-model="form.first_name" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle_name"
                                    class="col-md-4 col-form-label text-md-right">Middle Name</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text" class="form-control"
                                        required v-model="form.middle_name" />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name"
                                    class="col-md-4 col-form-label text-md-right">last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"  class="form-control"
                                        required v-model="form.last_name" />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" v-model="form.address" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-6">
                                    <select v-model="form.country_id" @change="getStates()" class="form-control" id="country"
                                       name="country" required
                                        aria-label="Default select example">
                                        <option selected  v-for="country in countries" :key="country.id" :value="country.id" >{{ country.name }}</option>
                                        
                                            
                                        
                                    </select>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="state"
                                    class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="state" v-model="form.state_id" @change="getCities()"
                                       name="state" required
                                        aria-label="Default select example">
                                        
                                            <option v-for="state in states" :key="state.id" :value="state.id" >{{ state.name}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="department" v-model="form.department_id"
                                       name="department" required
                                        aria-label="Default select example">
                                        
                                            <option v-for="department in departments" :key="department.id" :value="department.id" >{{department.name}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-right">City</label>

                                <div class="col-md-6">
                                    <select  class="form-control" id="city" 
                                       name="city" required v-model="form.city_id" 
                                        aria-label="Default select example">
                                       
                                        
                                            <option v-for="city in cities" :key="city.id" :value="city.id" >{{ city.name}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right">Zip Code</label>

                                <div class="col-md-6">
                                    <input id="zipcode" v-model="form.zip_code" type="text" class="form-control"
                                        required />                                
                                        
                                  
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right">Birth Date</label>

                                <div class="col-md-6">
                                    <datepicker input-class="form-control" v-model="form.birthdate" ></datepicker>
                                  
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="zipcode"
                                    class="col-md-4 col-form-label text-md-right"> Date Hired</label>

                                <div class="col-md-6">
                                    <datepicker input-class="form-control" v-model="form.date_hired" ></datepicker>
                                  
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';

export default {
components: {
    Datepicker
  },
  data(){
   return {
    countries: [],
    states: [],
    cities: [],
    departments: [],
    form: {
        first_name:'',
        middle_name:'',
        last_name:'',        
        address:'',
        country_id: '',
        state_id: '',
        city_id: '',
        department_id: '',
        zip_code: '',        
        birthdate: null,
        date_hired: null 
    }
   }
  },

  created(){
    this.getCountries();
    this.getDepartments();
  },

  
  methods:{
    getCountries(){
      axios.get('/api/employees/nchi').then(res =>{
        this.countries = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    },
    getStates(){
        axios.get('/api/employees/'+this.form.country_id+'/states').then(res =>{
        this.states = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    },
    getCities(){
        axios.get('/api/employees/'+this.form.state_id+'/cities').then(res =>{
        this.cities = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    },
     getDepartments(){
        axios.get('/api/employees/departments').then(res =>{
        this.departments = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    },

    storeEmployee(){
        axios.post('/api/employees',{
            'first_name': this.form.first_name,
            'middle_name': this.form.middle_name,
            'last_name': this.form.last_name,
            'address': this.form.address,
            'country_id': this.form.country_id,
            'state_id': this.form.state_id,
            'city_id': this.form.city_id,
            'department_id': this.form.department_id,
            'zip_code': this.form.zip_code,
            'birthdate': this.format_date(this.form.birthdate),
            'date_hired': this.format_date(this.form.date_hired),            
        }).then((res=>{
            this.$router.push({name: 'EmployeesIndex'})
            console.log(res);
        }))

    },

    format_date(value){
        if(value){
            return moment(String(value)).format('YYYYMMDD');
        }
    },
  }
};
</script>

<style>

</style>