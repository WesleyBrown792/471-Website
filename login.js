"use strict";
function ValidityChecker() {
    var valid = [false, false, false, false, false, false, false];
    var validStr = ["the email must not be left blank",
                "a valid email must be provided (JohnDoe@gmail.com, etc.)",
                "8-16 characters",
                "at least one digit",
                "at least one lowercase letter",
                "at least one uppercase letter",
                "at least one special character"];

    function EmailCorrectForm() {
        var val = document.getElementById("accEmail").value;
        if (val !== "") {
            valid[0] = true;
        }
        var atPos = val.indexOf("@");
        var periodPos = val.indexOf(".");
        if (!(atPos < 1 || (periodPos - atPos) < 2)) {
           valid[1] = true;
        }
    }

    function PasswordCorrectForm() {
        var valStr = document.getElementById("accPassword").value;
        if ((valStr.length > 7) && (valStr.length < 17)) {
            valid[2] = true;
        }
        if (new RegExp(".*[0-9].*").test(valStr)) {
            valid[3] = true;
        }
        if (new RegExp(".*[a-z].*").test(valStr)) {
            valid[4] = true;
        }
        if (new RegExp(".*[A-Z].*").test(valStr)) {
            valid[5] = true;
        }
        if (new RegExp(".*[!@#$%^&*(),.?:{}|<>].*").test(valStr)) {
            valid[6] = true;
        }
    }

    function AccountValidation() {
        EmailCorrectForm();
        PasswordCorrectForm();
        var retVal = "";
        var issues = 0;
        var i = 0;
        for (i = 0; i < valid.length; i += 1) {
            if (valid[i] === false) {
                if (i > 1 && issues === 0) {
                    retVal += ("The password must contain " + validStr[i] + "; ");
                }
                else if (i > 1) {
                    retVal += ("the password must contain " + validStr[i] + "; ");
                }
                else if (issues === 0 && i < 2) {
                    retVal += (validStr[i].charAt(0).toUpperCase() + validStr[i].slice(1) + "; ");
                }
                else {
                    retVal += (validStr[i] + "; ");
                }
                issues += 1;
            }
        }
        window.alert(`${issues} issues: ` + retVal);
        return issues === 0;
    }
    return AccountValidation();
}

function Empty() {
    var emailVal = document.getElementById("loginEmail").value;
    var passVal = document.getElementById("loginPassword").value;
    if ((emailVal === "") || (passVal === "")) {
        window.alert(`We know you're a dummy, but you should be able to provide us with your email and password`);
        return false;
    }
    return true;
}