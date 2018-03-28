<template>
    <div class="modal fade show" id="background" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <p>Drop files here to upload or</p>
                            <uploader-btn :single="single">select files</uploader-btn>
                            <!--uploader-btn :attrs="attrs">select images</uploader-btn-->
                            <!--uploader-btn-- :directory="true">select folder</uploader-btn-->
                        </uploader-drop>
                        <uploader-list></uploader-list>
                    </uploader>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                        <router-link to="/work" type="button" class="btn btn-default btn-link" data-dismiss="modal">Annulé</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
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
                imgDataUrl: '',
                imgContent: '',
                file: {},
                single: true,
                backgroundImg: ''
            }
        },
    }
</script>