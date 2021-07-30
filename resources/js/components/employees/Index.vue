<template>
  <div>
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
               
<div v-if="showMessage" >
    <div class="alert alert-success">
{{message}}
    </div>
</div>
                
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-row align-items-center">

                                <div class="col">

                                    <input class="form-control mb-2" type="search" v-model.lazy="search"
                                        placeholder="N limo">

                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                                <div class="col">
                                     <select class="form-control" id="state" v-model="selectedDept"
                                       name="state" required
                                        aria-label="Default select example">
                                        
                                            <option v-for="department in departments" :key="department.id" :value="department.id" >{{ department.name}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div>
                        <router-link :to="{name:'EmployeesCreate'}" class="btn btn-primary mb-2">Create</router-link>

                    </div>
                </div>


            </div>
            <div class="card-body">
                <table class="table caption-top">
                    <caption>List of employees</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
 
                            <tr v-for="emp in employees" :key="emp.id"  >

                                <td scope="row">{{ emp.id }}</td>
                                <td>{{ emp.first_name }}</td>
                                <td>{{ emp.last_name }}</td>
                                <td>{{ emp.address }}</td>
                                <td>{{ emp.department.name }}</td>
                                
                                <td>  
                                    <router-link :to="{name:'EmployeesEdit', params:{id: emp.id}}" class="btn btn-success fa fa-pencil " >Edit</router-link>
                                    <button class="" @click="deleteEmp(emp.id)" ><span class="fa fa-trash"></span></button>
                                </td>
                            </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>

    </div>
  </div>
</template>

<script>
export default {    
data(){
    return {
        employees : [],
        showMessage: false,
        message: '',
        search: null,
        selectedDept: null,
        departments: [],
    }
},
watch:{
    search(){
        this.getEmployees();
    },
    selectedDept(){
        this.getEmployees();
    }
},
 created(){
     this.getEmployees();
     this.getDepartments();

 },
 methods:{
     getEmployees(){
         axios.get('/api/employees', {params: {
             search : this.search,
             department_id: this.selectedDept
         }})
         .then(res=>{
             this.employees = res.data.data;
         }).catch(error =>{
             console.log(error);
         })
     },

     deleteEmp(id){
         axios.delete('/api/employees/'+id).
         then(res=>{
             this.showMessage = true;
             this.message = res.data;
             this.getEmployees();
             
             console.log(res);
         }).catch(error =>{
             console.log(error);
         })
     },
      getDepartments(){
        axios.get('/api/employees/departments').then(res =>{
        this.departments = res.data
        //console.log(res.data)
      }).catch(error =>{
        //console.log(error)
      })
    }

 }
};
</script>

<style>

</style>