<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donatur CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand ml-5 mr-5" href="#"></a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item ml-5 mr-5">
              <a class="nav-link" href="http://localhost:8000/donaturcrud">CRUD Donatur</a>
            </li>
            <li class="nav-item ml-5 mr-5">
              <a class="nav-link" href="http://localhost:8000/penggalang">CRUD Penggalang</a>
            </li>
            <li class="nav-item ml-5 mr-5">
              <a class="nav-link" href="http://localhost:8000/yayasan">CRUD Yayasan</a>
            </li>
          </ul>
        </div>
    </nav>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

    <div id="app">

        <!-- Modal for Creating-->
        <div class="modal fade" id="createDonaturModalCenter" tabindex="-1" role="dialog" aria-labelledby="createDonaturModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="createDonaturModalLongTitle">Create Donatur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Username</label>
                            <input  v-model="donatur" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Nama</label>
                            <input  v-model="nama" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Email</label>
                            <input  v-model="email" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Saldo</label>
                            <input  v-model="saldo" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>
                      
                      </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="createDonatur">Save</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for Updating-->
        <div class="modal fade" id="updateDonaturModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateDonaturModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="updateDonaturModalLongTitle">Create Donatur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="donatur">Username</label>
                            <input  v-model="donaturUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="donatur">Nama</label>
                            <input  v-model="namaUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="donatur">Email</label>
                            <input  v-model="emailUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="donatur">Saldo</label>
                            <input  v-model="saldoUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>
            
                      </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="updateDonatur">Update</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for Deleting-->
        <div class="modal fade" id="deleteDonaturModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteDonaturModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="deleteDonaturModalLongTitle">Confirm data deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this entry?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" v-on:click="deleteDonatur">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="py-3">
                <h3>CRUD Donatur
            </div>

              <div class="col-md-12">
                <button type="button" class="mb-4 btn btn-primary" data-toggle="modal" data-target="#createDonaturModalCenter">
                    Create Donatur
                </button>

                <div v-if="message" class="alert alert-success" role="alert">
                    {{ message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>  
                        <th>Email</th>
                        <th>Saldo</th>                                                
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr v-for="donatur in donaturs">
                        <td>{{ donatur.id }}</td>
                        <td>{{ donatur.username }}</td>
                        <td>{{ donatur.nama }} </td>     
                        <td>{{ donatur.email }}</td>
                        <td>Rp.{{ donatur.saldo }} </td>                                           
                        <td><button class="btn btn-md btn-warning" v-on:click="getEdit(donatur)">Edit</button></td>
                        <td><button class="btn btn-danger" v-on:click="getDelete(donatur)">Delete</button></td>
                    </li>
                </table>
              </div>
            </div>
    </div>
    

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        var app = new Vue ({
            el: '#app',
            data: {
                errors: [],
                message: null,
                donaturs:[],
                donaturIdEdit: null,
                donaturIdDelete: null,
                editMode: false,
                deleteMode: false,
                donatur: '',
                nama: '',
                email: '',
                saldo: '',                
                donaturUpdate: '',
                namaUpdate: '',
                emailUpdate: '',                   
                saldoUpdate: '',       
            },
            mounted: function() {
                this.getDonaturs();
            },
            methods: {
                getDonaturs() {
                    axios.get('http://localhost:8000/api/donaturs')
                        .then(response => {
                            this.donaturs = response.data;
                            console.log(response);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },
                createDonatur: function(){
                    //Hide the create modal
                    $('#createDonaturModalCenter').modal('hide');

                    axios.post('http://localhost:8000/api/donaturs', {
                        username: this.donatur,
                        nama: this.nama,
                        email: this.email,
                        saldo: this.saldo,                        
                    })
                    .then(response => {
                            this.getDonaturs();
                            this.message = "Your data has been created";
                            this.resetForm();
                            console.log(response);
                    })
                    .catch(error => {
                            console.log(error);
                    });
                },
                resetForm: function () {
                    this.editMode = false;
                    this.deleteMode = false;
                    this.donaturIdEdit = null;
                    this.donatur = null;
                    this.nama = null;
                    this.email = null;
                    this.saldo = null;

                },
                getEdit: function (donatur) {
                    //Show the update modal
                    $('#updateDonaturModalCenter').modal('show');
                    this.message = null;
                    this.editMode = true;
                    this.deleteMode = false;
                    this.donaturIdEdit = donatur.id;
                    this.donaturUpdate = donatur.username;
                    this.namaUpdate = donatur.nama;
                    this.emailUpdate = donatur.email;
                    this.saldoUpdate = donatur.saldo;                        
                },
                getDelete: function (user) {
                    //Show the delete modal
                    $('#deleteDonaturModalCenter').modal('show')
                    this.message = null;
                    this.deleteMode = true;
                    this.editMode = false;
                    this.donaturIdDelete = user.id;
                },
                updateDonatur: function () {
                    axios.patch(`http://localhost:8000/api/donaturs/${this.donaturIdEdit}`, {
                            username: this.donaturUpdate,
                            nama: this.namaUpdate,  
                            email: this.emailUpdate,  
                            saldo: this.saldoUpdate,                            
                        })
                        .then(res => {
                            // handle success
                            this.message = "Your data has been updated";
                            //close the update modal
                            $('#updateDonaturModalCenter').modal('hide');
                            this.resetForm();
                            this.getDonaturs();
                        })
                        .catch(err => {
                            // handle error
                            console.log(err);
                        })
                },
                // Delete User
                deleteDonatur: function () {
                    axios.delete(`http://localhost:8000/api/donaturs/${this.donaturIdDelete}`)
                        .then(res => {
                            // handle success
                            this.message = "Your data has been deleted";
                            //close the delete modal
                            $('#deleteDonaturModalCenter').modal('hide');
                            this.resetForm();
                            this.getDonaturs();
                        })
                        .catch(err => {
                            // handle error
                            console.log(err);
                        })
                }
            }
        })

    </script>


</body>
</html>