<template>
  <div>
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
               

                
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-row align-items-center">

                                <div class="col">

                                    <input class="form-control mb-2" type="search" name="search" id="autoSizingCheck"
                                        placeholder="N limo">

                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
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
                    <caption>List of countries</caption>
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
 
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-success" href="">Edit</a>
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

}
</script>

<style>

</style>