<template>
    <div>
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('/img/fabio-mangione.jpg');">
            <div class="filter"></div>
            <div class="container u-marginTop30 u-paddingTop30 z-7 header-title">
                <div class="text-center">
                    <a class="btn btn-outline-primary btn-round" data-toggle="modal" data-target="#background">
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="section profile-content">
            <div class="container">
                <div class="owner">
                    <div class="avatar">
                        <img :src="imgDataUrl" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        <a class="btn btn-outline-primary btn-round" @click="toggleShow" >
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                    <div class="name">
                        <h4 class="title">Jane Faker<br></h4>
                        <h6 class="description">Music Producer</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <p>An artist of considerable range, Jane Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <br>
                        <button class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</button>
                    </div>
                </div>
                <br>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content following">
                    <div class="tab-pane active" id="follows" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <ul class="list-unstyled follows">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 ml-auto mr-auto">
                                                <img src="/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                            <div class="col-md-7 col-sm-4  ml-auto mr-auto">
                                                <h6>Flume<br><small>Musical Producer</small></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-2  ml-auto mr-auto">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2 ml-auto mr-auto ">
                                                <img src="/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                            <div class="col-md-7 col-sm-4">
                                                <h6>Banks<br><small>Singer</small></h6>
                                            </div>
                                            <div class="col-md-3 col-sm-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center" id="following" role="tabpanel">
                        <h3 class="text-muted">Not following anyone yet :(</h3>
                        <button class="btn btn-warning btn-round">Find artists</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="background" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg u-maxWidth1000" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Background</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <uploader :options="options" class="uploader-example" :singleFile="single" v-on:fileSuccess="imageUploaded">
                            <uploader-unsupport></uploader-unsupport>
                            <uploader-drop>
                                <p>Drop files here to upload </p>
                                <!--uploader-btn-- :single="single">select files</uploader-btn-->
                                <!--uploader-btn :attrs="attrs">select images</uploader-btn-->
                                <!--uploader-btn-- :directory="true">select folder</uploader-btn-->
                            </uploader-drop>
                            <uploader-list></uploader-list>
                        </uploader>
                    </div>
                    <div class="modal-footer">
                        <div class="left-side">
                            <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Annulé</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <icon field="img"
              @crop-success="cropSuccess"
              @crop-upload-success="cropUploadSuccess"
              @crop-upload-fail="cropUploadFail"
              v-model="show"
              :width="300"
              :height="300"
              langType="fr"
              :url="options.target"
              :params="params"
              :headers="options.headers"
              img-format="png"></icon>

    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import icon from 'vue-image-crop-upload';

    export default {
        data () {
            return {
                attrs: {
                    accept: 'image/*'
                },
                options: {
                    target: 'upload/' + document.head.querySelector('meta[name="dir"]').getAttribute('content'),
                    testChunks: false,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'Content-Type' : 'application/json'
                    },
                },
                params: {
                    name: 'icon'
                },
                show: false,
                imgDataUrl: '/img/faces/joe-gardner-2.jpg',
                imgContent: '',
                file: {},
                single: true,
                backgroundImg: ''
            }
        },
        components: {icon},
        mounted() {
        },
        computed: {
            ...mapGetters(['user']),
        },
        methods: {
            imageUploaded(rootFile, file, message, chunk) {
                console.log(rootFile, file, message, chunk)
            },
            toggleShow() {
                this.show = !this.show;
            },
            /**
             * crop success
             *
             * [param] imgDataUrl
             * [param] field
             */
            cropSuccess(imgDataUrl, field){
                console.log('-------- crop success --------');
                this.imgDataUrl = imgDataUrl;
            },
            /**
             * upload success
             *
             * [param] jsonData  server api return data, already json encode
             * [param] field
             */
            cropUploadSuccess(jsonData, field){
                console.log('-------- upload success --------');
                console.log(jsonData);
                console.log('field: ' + field);
                this.field = {}
            },
            /**
             * upload fail
             *
             * [param] status    server api return error status, like 500
             * [param] field
             */
            cropUploadFail(status, field){
                console.log('-------- upload fail --------');
                console.log(status);
                console.log('field: ' + field);
            }
        }
    }
</script>

<style>
    .uploader-example {
        width: 880px;
        padding: 15px;
        margin: 40px auto 0;
        font-size: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .4);
    }
    .uploader-example .uploader-btn {
        margin-right: 4px;
    }
    .uploader-example .uploader-list {
        max-height: 440px;
        overflow: auto;
        overflow-x: hidden;
        overflow-y: auto;
    }
    .avatar {
        position: relative;
        overflow: hidden;
    }
    .avatar a {
        position: absolute;
        top:60px;
        left:60px;
        opacity: 0;
        transition: opacity .4s;
    }
    .avatar:hover a {
        opacity: 1;
        transition: opacity .4s;
    }

</style>