$(function(){

    $(".signin").on("click", function() {
        let params = [$("#forEmail").val(),$("#forPassword").val()] 
        let IsEmpty = params.some(param => param == "")
        if(IsEmpty){
            console.log("Email and password required")
            return
        }else{
            $.post("checker.php",{
                email:params[0],
                password:params[1]
            },function(result){
                if(result){
                    window.location.href = "dashboard.php";
                }else{
                    console.log("Wrong email or password")
                    $(".message").trigger("click");
                    // $(".vote").trigger("click");
                }
            })
        }
    })

    $("#addnew").on("click", function() {
        const numbers = Array.from({ length: 1 }, () => 
            Math.floor(1000 + Math.random() * 9000) // Random 4-digit number between 1000 and 9999
          );
        $('#code').val(numbers.join(', '))
    })

    $(".edit").on("click", function() {
        let data = $(this).closest("tr").find(".data").text()
        let json = JSON.parse(data)
        $("#eid").val(json.candidate_id)
        $("#ename").val(json.candidate_name)
        $("#egender").val(json.candidate_gender)
        $("#emobile").val(json.candidate_mobile)
        $("#ecode").val(json.candidate_code)
        $("#edit-modal").modal("show");
    })

    $(".view").on("click", function() {
        let data = $(this).closest("tr").find(".data").text()
        let json = JSON.parse(data)
        $(".preview").attr("src", "../public/assets/imgs/candidate/" + json.candidate_image);
        $("#view-modal").modal("show");
    })

    $(".photo").on("click", function() {
        let data = $(this).closest("tr").find(".data").text()
        let json = JSON.parse(data)
        $(".preview").attr("src", "../public/assets/imgs/candidate/" + json.candidate_image);
        $("#view-modal").modal("show");
    })

    let candidateId = null;
    let tableRow = null;
    $(".delete").on("click", function() {
        let data = $(this).closest("tr").find(".data").text()
        let json = JSON.parse(data)
        candidateId = json.candidate_id
        tableRow = $(this).closest("tr");
        $("#al-danger-alert").modal("show");
    })

    $(".del").on("click", function() {
        $.post("delete_exec.php",{
            NewCandidateId:candidateId
        },function(result){
            tableRow.remove()
        })
    })

    $(".refresh").on("click",function(){
        window.location.href = ""
    })

    $("#submit-update").click(function(){

        let params = [$("#eid").val(),$("#ename").val(),$("#egender").val(),$("#emobile").val(),$("#ecode").val()]
        let IsEmpty = params.some(param => param == "")
        if(IsEmpty){
            console.log("All fields are required")
            return
        }else{
            $(".updatespin").show();
            setTimeout(function(){

                $.post("update_exec.php",{
                    candidateid:params[0],
                    candidatename:params[1],
                    candidategender:params[2],
                    candidatemobile:params[3],
                    candidatecode:params[4]
                },function(result){
                    $("#edit-modal").modal("hide");
                    $(".alert-text").text("Candidate details has been updated successfully, kindly refresh your browser to see the new changes")
                    $("#al-success-alert").modal("show");
                    $(".updatespin").hide();
                })

            },1000)
        }

    })

    $("#submit").on("click",function(e){
        e.preventDefault()
        let params = [$("#name").val(),$("#gender").val(),$("#mobile").val(),$("#code").val()] 
        let IsEmpty = params.some(param => param == "")
        if(IsEmpty){
            console.log("All fields are required")
            return
        }else{
            sendDataToServer(params[0],params[1], params[2], params[3])
        }
    })

    function sendDataToServer(name, gender, mobile, code) {
        // Assuming you are using jQuery for AJAX
        $(".bx-spin").show();

        setTimeout(function(){

            $("#myfile").upload("add_exec.php",{

                name:name,
                gender:gender,
                mobile:mobile,
                code:code
    
            },function (data) {
                $("#signup-modal").modal("hide");
                $(".alert-text").text("New candidate has been added successfully, please refresh your browser to see the new changes.")
                $("#al-success-alert").modal("show");
                $(".bx-spin").hide();
                console.log(data)
            })

        },1000)
        
    }

    $.fn.upload = function(remote, data, successFn, progressFn) {
        // if we dont have post data, move it along
            if (typeof data != "object") {
                progressFn = successFn;
                successFn = data;
            }
    
            var formData = new FormData();
    
            var numFiles = 0;
            this.each(function() {
                var i, length = this.files.length;
                numFiles += length;
                for (i = 0; i < length; i++) {
                    formData.append(this.name, this.files[i]);
                }
            });
    
            // if we have post data too
            if (typeof data == "object") {
                for (var i in data) {
                    formData.append(i, data[i]);
                }
            }
    
            var def = new $.Deferred();
            if (numFiles > 0) {
                // do the ajax request
                $.ajax({
                    url: remote,
                    type: "POST",
                    xhr: function() {
                        myXhr = $.ajaxSettings.xhr();
                        if(myXhr.upload && progressFn){
                            myXhr.upload.addEventListener("progress", function(prog) {
                                var value = ~~((prog.loaded / prog.total) * 100);
    
                                // if we passed a progress function
                                if (typeof progressFn === "function") {
                                    progressFn(prog, value);
    
                                    // if we passed a progress element
                                } else if (progressFn) {
                                    $(progressFn).val(value);
                                }
                            }, false);
                        }
                        return myXhr;
                    },
                    data: formData,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false,
                    complete: function(res) {
                        var json;
                        try {
                            json = JSON.parse(res.responseText);
                        } catch(e) {
                            json = res.responseText;
                        }
                        if (typeof successFn === "function") successFn(json);
                        def.resolve(json);
                    }
                });
            } else {
                def.reject();
            }
    
            return def.promise();
    
    };
 
})