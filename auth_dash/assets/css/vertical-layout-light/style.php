<?php
    header("Content-type: text/css; charset: UTF-8");
    define('BASEPATH', true);
    include "../../../../core/config/database.php";
    include "../../../../core/helpers/general_helper.php";
    
?>

.has-success .checkbox,
.has-success .checkbox-inline,
.has-success .control-label,
.has-success .help-block,
.has-success .radio,
.has-success .radio-inline,
.has-success.checkbox label,
.has-success.checkbox-inline label,
.has-success.radio label,
.has-success.radio-inline label {
  color: #3c763d
}

.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
}

.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
}

.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d
}

.has-success .form-control-feedback {
  color: #3c763d
}

.has-warning .checkbox,
.has-warning .checkbox-inline,
.has-warning .control-label,
.has-warning .help-block,
.has-warning .radio,
.has-warning .radio-inline,
.has-warning.checkbox label,
.has-warning.checkbox-inline label,
.has-warning.radio label,
.has-warning.radio-inline label {
  color: #8a6d3b
}

.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
}

.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
}

.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b
}

.has-warning .form-control-feedback {
  color: #8a6d3b
}

.has-error .checkbox,
.has-error .checkbox-inline,
.has-error .control-label,
.has-error .help-block,
.has-error .radio,
.has-error .radio-inline,
.has-error.checkbox label,
.has-error.checkbox-inline label,
.has-error.radio label,
.has-error.radio-inline label {
  color: #a94442
}

.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
}

.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
}

.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442
}

.has-error .form-control-feedback {
  color: #a94442
}

.has-feedback label~.form-control-feedback {
  top: 25px
}

.has-feedback label.sr-only~.form-control-feedback {
  top: 0
}

.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373
}

@-moz-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-o-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-ms-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-moz-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-o-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-ms-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-moz-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-o-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-ms-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-moz-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-o-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-ms-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-moz-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-o-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-ms-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-moz-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-o-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-ms-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-moz-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-o-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-ms-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-moz-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-o-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-ms-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-moz-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-o-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-ms-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v4.1.1 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #6c757d;
  --gray-dark: #0f1531;
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #434a54;
  --gray-light: #d3d3d3;
  --gray-lighter: #e8eff4;
  --gray-lightest: #e6e9ed;
  --black: #000000;
  --primary: #3c4876;
  --secondary: #dfe3e9;
  --success: #71c016;
  --info: #b3b4e8;
  --warning: #ffc100;
  --danger: #fc5661;
  --light: #f8f9fa;
  --dark: #000000;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #000;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 1.25rem 0.9375rem;
  padding-bottom: 1.25rem 0.9375rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014 \00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%;
}

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%;
}

.col-6, .lightGallery .image-tile {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%;
}

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%;
}

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.33333%;
}

.offset-2 {
  margin-left: 16.66667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333%;
}

.offset-5 {
  margin-left: 41.66667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333%;
}

.offset-8 {
  margin-left: 66.66667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333%;
}

.offset-11 {
  margin-left: 91.66667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333%;
  }
  .offset-sm-2 {
    margin-left: 16.66667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333%;
  }
  .offset-sm-5 {
    margin-left: 41.66667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333%;
  }
  .offset-sm-8 {
    margin-left: 66.66667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333%;
  }
  .offset-sm-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-md-3, .lightGallery .image-tile {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4, .lightGallery .image-tile {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 13;
  }
  .order-md-0 {
    order: 0;
  }
  .order-md-1 {
    order: 1;
  }
  .order-md-2 {
    order: 2;
  }
  .order-md-3 {
    order: 3;
  }
  .order-md-4 {
    order: 4;
  }
  .order-md-5 {
    order: 5;
  }
  .order-md-6 {
    order: 6;
  }
  .order-md-7 {
    order: 7;
  }
  .order-md-8 {
    order: 8;
  }
  .order-md-9 {
    order: 9;
  }
  .order-md-10 {
    order: 10;
  }
  .order-md-11 {
    order: 11;
  }
  .order-md-12 {
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333%;
  }
  .offset-md-2 {
    margin-left: 16.66667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333%;
  }
  .offset-md-5 {
    margin-left: 41.66667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333%;
  }
  .offset-md-8 {
    margin-left: 66.66667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333%;
  }
  .offset-md-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-lg-3, .lightGallery .image-tile {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 13;
  }
  .order-lg-0 {
    order: 0;
  }
  .order-lg-1 {
    order: 1;
  }
  .order-lg-2 {
    order: 2;
  }
  .order-lg-3 {
    order: 3;
  }
  .order-lg-4 {
    order: 4;
  }
  .order-lg-5 {
    order: 5;
  }
  .order-lg-6 {
    order: 6;
  }
  .order-lg-7 {
    order: 7;
  }
  .order-lg-8 {
    order: 8;
  }
  .order-lg-9 {
    order: 9;
  }
  .order-lg-10 {
    order: 10;
  }
  .order-lg-11 {
    order: 11;
  }
  .order-lg-12 {
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333%;
  }
  .offset-lg-2 {
    margin-left: 16.66667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333%;
  }
  .offset-lg-5 {
    margin-left: 41.66667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333%;
  }
  .offset-lg-8 {
    margin-left: 66.66667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333%;
  }
  .offset-lg-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-xl-3, .lightGallery .image-tile {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    order: -1;
  }
  .order-xl-last {
    order: 13;
  }
  .order-xl-0 {
    order: 0;
  }
  .order-xl-1 {
    order: 1;
  }
  .order-xl-2 {
    order: 2;
  }
  .order-xl-3 {
    order: 3;
  }
  .order-xl-4 {
    order: 4;
  }
  .order-xl-5 {
    order: 5;
  }
  .order-xl-6 {
    order: 6;
  }
  .order-xl-7 {
    order: 7;
  }
  .order-xl-8 {
    order: 8;
  }
  .order-xl-9 {
    order: 9;
  }
  .order-xl-10 {
    order: 10;
  }
  .order-xl-11 {
    order: 11;
  }
  .order-xl-12 {
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333%;
  }
  .offset-xl-2 {
    margin-left: 16.66667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333%;
  }
  .offset-xl-5 {
    margin-left: 41.66667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333%;
  }
  .offset-xl-8 {
    margin-left: 66.66667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333%;
  }
  .offset-xl-11 {
    margin-left: 91.66667%;
  }
}

.table, .jsgrid .jsgrid-table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th, .jsgrid .jsgrid-table th,
.table td, .jsgrid .jsgrid-table td {
  padding: 0.8rem 0.9375rem;
  vertical-align: top;
  border-top: 1px solid #e9e8ef;
}

.table thead th, .jsgrid .jsgrid-table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #e9e8ef;
}

.table tbody + tbody, .jsgrid .jsgrid-table tbody + tbody {
  border-top: 2px solid #e9e8ef;
}

.table .table, .jsgrid .jsgrid-table .table, .table .jsgrid .jsgrid-table, .jsgrid .table .jsgrid-table, .jsgrid .jsgrid-table .jsgrid-table {
  background-color: #fff;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #e9e8ef;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #e9e8ef;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #F7F7FA;
}

.table-hover tbody tr:hover {
  background-color: #eaeaf1;
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #c8ccd9;
}

.table-hover .table-primary:hover {
  background-color: #b9becf;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #b9becf;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #f6f7f9;
}

.table-hover .table-secondary:hover {
  background-color: #e7e9ef;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #e7e9ef;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #d7edbe;
}

.table-hover .table-success:hover {
  background-color: #cbe7aa;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #cbe7aa;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #eaeaf9;
}

.table-hover .table-info:hover {
  background-color: #d6d6f3;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #d6d6f3;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeb8;
}

.table-hover .table-warning:hover {
  background-color: #ffe89f;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe89f;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #fed0d3;
}

.table-hover .table-danger:hover {
  background-color: #fdb7bc;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #fdb7bc;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #b8b8b8;
}

.table-hover .table-dark:hover {
  background-color: #ababab;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #ababab;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th, .jsgrid .jsgrid-table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #e9e8ef;
}

.table-dark {
  color: #fff;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  padding: 0.8rem 0.8rem;
  font-size: 1rem;
  line-height: 1;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.125rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
  .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
  .tt-query,
  .tt-hint {
    transition: none;
  }
}

.form-control::-ms-expand, .asColorPicker-input::-ms-expand, .dataTables_wrapper select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-ms-expand,
.jsgrid .jsgrid-table .jsgrid-filter-row select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-ms-expand, .select2-container--default .select2-selection--single::-ms-expand, .select2-container--default .select2-selection--single .select2-search__field::-ms-expand, .typeahead::-ms-expand,
.tt-query::-ms-expand,
.tt-hint::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
.tt-query::placeholder,
.tt-hint::placeholder {
  color: #c9c8c8;
  opacity: 1;
}

.form-control:disabled, .asColorPicker-input:disabled, .dataTables_wrapper select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:disabled,
.jsgrid .jsgrid-table .jsgrid-filter-row select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:disabled, .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
.tt-query:disabled,
.tt-hint:disabled, .form-control[readonly], [readonly].asColorPicker-input, .dataTables_wrapper select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=number], .select2-container--default [readonly].select2-selection--single, .select2-container--default .select2-selection--single [readonly].select2-search__field, [readonly].typeahead,
[readonly].tt-query,
[readonly].tt-hint {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:not([size]):not([multiple]), select.asColorPicker-input:not([size]):not([multiple]), .dataTables_wrapper select:not([size]):not([multiple]),
.jsgrid .jsgrid-table .jsgrid-filter-row select:not([size]):not([multiple]), .select2-container--default select.select2-selection--single:not([size]):not([multiple]), .select2-container--default .select2-selection--single select.select2-search__field:not([size]):not([multiple]), select.typeahead:not([size]):not([multiple]),
select.tt-query:not([size]):not([multiple]),
select.tt-hint:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value, select.asColorPicker-input:focus::-ms-value, .dataTables_wrapper select:focus::-ms-value,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus::-ms-value, .select2-container--default select.select2-selection--single:focus::-ms-value, .select2-container--default .select2-selection--single select.select2-search__field:focus::-ms-value, select.typeahead:focus::-ms-value,
select.tt-query:focus::-ms-value,
select.tt-hint:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.875rem + 1px);
  padding-bottom: calc(0.875rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1;
}

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.875rem;
  padding-bottom: 0.875rem;
  margin-bottom: 0;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control, .input-group-sm > .form-control-plaintext.asColorPicker-input, .dataTables_wrapper .input-group-sm > select.form-control-plaintext, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input.form-control-plaintext[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select.form-control-plaintext, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input.form-control-plaintext[type=number], .select2-container--default .input-group-sm > .form-control-plaintext.select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .form-control-plaintext.select2-search__field, .input-group-sm > .form-control-plaintext.typeahead, .input-group-sm >
.form-control-plaintext.tt-query, .input-group-sm >
.form-control-plaintext.tt-hint,
.input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-sm > .input-group-prepend > .form-control-plaintext.btn, .fc
.input-group-sm > .input-group-prepend > button.form-control-plaintext, .ajax-upload-dragdrop
.input-group-sm > .input-group-prepend > .form-control-plaintext.ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-prepend > .form-control-plaintext.swal2-styled, .wizard > .actions
.input-group-sm > .input-group-prepend > a.form-control-plaintext,
.input-group-sm > .input-group-append > .form-control-plaintext.btn, .fc
.input-group-sm > .input-group-append > button.form-control-plaintext, .ajax-upload-dragdrop
.input-group-sm > .input-group-append > .form-control-plaintext.ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-append > .form-control-plaintext.swal2-styled, .wizard > .actions
.input-group-sm > .input-group-append > a.form-control-plaintext, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control, .input-group-lg > .form-control-plaintext.asColorPicker-input, .dataTables_wrapper .input-group-lg > select.form-control-plaintext, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input.form-control-plaintext[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select.form-control-plaintext, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input.form-control-plaintext[type=number], .select2-container--default .input-group-lg > .form-control-plaintext.select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .form-control-plaintext.select2-search__field, .input-group-lg > .form-control-plaintext.typeahead, .input-group-lg >
.form-control-plaintext.tt-query, .input-group-lg >
.form-control-plaintext.tt-hint,
.input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
.input-group-lg > .input-group-prepend > .form-control-plaintext.btn, .fc
.input-group-lg > .input-group-prepend > button.form-control-plaintext, .ajax-upload-dragdrop
.input-group-lg > .input-group-prepend > .form-control-plaintext.ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-prepend > .form-control-plaintext.swal2-styled, .wizard > .actions
.input-group-lg > .input-group-prepend > a.form-control-plaintext,
.input-group-lg > .input-group-append > .form-control-plaintext.btn, .fc
.input-group-lg > .input-group-append > button.form-control-plaintext, .ajax-upload-dragdrop
.input-group-lg > .input-group-append > .form-control-plaintext.ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-append > .form-control-plaintext.swal2-styled, .wizard > .actions
.input-group-lg > .input-group-append > a.form-control-plaintext {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm, .input-group-sm > .form-control, .input-group-sm > .asColorPicker-input, .dataTables_wrapper .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=number], .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead, .input-group-sm >
.tt-query, .input-group-sm >
.tt-hint,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn, .fc
.input-group-sm > .input-group-prepend > button, .ajax-upload-dragdrop
.input-group-sm > .input-group-prepend > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-prepend > .swal2-styled, .wizard > .actions
.input-group-sm > .input-group-prepend > a,
.input-group-sm > .input-group-append > .btn, .fc
.input-group-sm > .input-group-append > button, .ajax-upload-dragdrop
.input-group-sm > .input-group-append > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-append > .swal2-styled, .wizard > .actions
.input-group-sm > .input-group-append > a {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]), .input-group-sm > select.asColorPicker-input:not([size]):not([multiple]), .dataTables_wrapper .input-group-sm > select:not([size]):not([multiple]),
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select:not([size]):not([multiple]), .select2-container--default .input-group-sm > select.select2-selection--single:not([size]):not([multiple]), .select2-container--default .select2-selection--single .input-group-sm > select.select2-search__field:not([size]):not([multiple]), .input-group-sm > select.typeahead:not([size]):not([multiple]), .input-group-sm >
select.tt-query:not([size]):not([multiple]), .input-group-sm >
select.tt-hint:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]), .ajax-upload-dragdrop
.input-group-sm > .input-group-prepend > select.ajax-file-upload:not([size]):not([multiple]), .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-prepend > select.swal2-styled:not([size]):not([multiple]),
.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]), .ajax-upload-dragdrop
.input-group-sm > .input-group-append > select.ajax-file-upload:not([size]):not([multiple]), .swal2-modal .swal2-buttonswrapper
.input-group-sm > .input-group-append > select.swal2-styled:not([size]):not([multiple]) {
  height: calc(1.8125rem + 2px);
}

.form-control-lg, .input-group-lg > .form-control, .input-group-lg > .asColorPicker-input, .dataTables_wrapper .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=number], .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead, .input-group-lg >
.tt-query, .input-group-lg >
.tt-hint,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn, .fc
.input-group-lg > .input-group-prepend > button, .ajax-upload-dragdrop
.input-group-lg > .input-group-prepend > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-prepend > .swal2-styled, .wizard > .actions
.input-group-lg > .input-group-prepend > a,
.input-group-lg > .input-group-append > .btn, .fc
.input-group-lg > .input-group-append > button, .ajax-upload-dragdrop
.input-group-lg > .input-group-append > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-append > .swal2-styled, .wizard > .actions
.input-group-lg > .input-group-append > a {
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]), .input-group-lg > select.asColorPicker-input:not([size]):not([multiple]), .dataTables_wrapper .input-group-lg > select:not([size]):not([multiple]),
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select:not([size]):not([multiple]), .select2-container--default .input-group-lg > select.select2-selection--single:not([size]):not([multiple]), .select2-container--default .select2-selection--single .input-group-lg > select.select2-search__field:not([size]):not([multiple]), .input-group-lg > select.typeahead:not([size]):not([multiple]), .input-group-lg >
select.tt-query:not([size]):not([multiple]), .input-group-lg >
select.tt-hint:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
.input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]), .ajax-upload-dragdrop
.input-group-lg > .input-group-prepend > select.ajax-file-upload:not([size]):not([multiple]), .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-prepend > select.swal2-styled:not([size]):not([multiple]),
.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]), .ajax-upload-dragdrop
.input-group-lg > .input-group-append > select.ajax-file-upload:not([size]):not([multiple]), .swal2-modal .swal2-buttonswrapper
.input-group-lg > .input-group-append > select.swal2-styled:not([size]):not([multiple]) {
  height: calc(2.875rem + 2px);
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #9b9b9b;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #ffffff;
  background-color: rgba(40, 167, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:valid, .was-validated .asColorPicker-input:valid, .was-validated .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:valid, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:valid,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:valid, .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid, .was-validated
.tt-query:valid, .was-validated
.tt-hint:valid, .form-control.is-valid, .is-valid.asColorPicker-input, .dataTables_wrapper select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #28a745;
}

.was-validated .form-control:valid:focus, .was-validated .asColorPicker-input:valid:focus, .was-validated .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:valid:focus, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:valid:focus, .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus, .was-validated
.tt-query:valid:focus, .was-validated
.tt-hint:valid:focus, .form-control.is-valid:focus, .is-valid.asColorPicker-input:focus, .dataTables_wrapper select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number]:focus, .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
.is-valid.tt-query:focus,
.is-valid.tt-hint:focus, .was-validated
.custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback, .was-validated .asColorPicker-input:valid ~ .valid-feedback, .was-validated .dataTables_wrapper select:valid ~ .valid-feedback, .dataTables_wrapper .was-validated select:valid ~ .valid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:valid ~ .valid-feedback, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:valid ~ .valid-feedback,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid ~ .valid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:valid ~ .valid-feedback, .was-validated .select2-container--default .select2-selection--single:valid ~ .valid-feedback, .select2-container--default .was-validated .select2-selection--single:valid ~ .valid-feedback, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid ~ .valid-feedback, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid ~ .valid-feedback, .was-validated .typeahead:valid ~ .valid-feedback, .was-validated
.tt-query:valid ~ .valid-feedback, .was-validated
.tt-hint:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip,
.was-validated .asColorPicker-input:valid ~ .valid-tooltip,
.was-validated .dataTables_wrapper select:valid ~ .valid-tooltip, .dataTables_wrapper
.was-validated select:valid ~ .valid-tooltip,
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:valid ~ .valid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated input[type=text]:valid ~ .valid-tooltip,
.was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:valid ~ .valid-tooltip,
.jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated select:valid ~ .valid-tooltip,
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:valid ~ .valid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated input[type=number]:valid ~ .valid-tooltip,
.was-validated .select2-container--default .select2-selection--single:valid ~ .valid-tooltip, .select2-container--default
.was-validated .select2-selection--single:valid ~ .valid-tooltip,
.was-validated .select2-container--default .select2-selection--single .select2-search__field:valid ~ .valid-tooltip, .select2-container--default .select2-selection--single
.was-validated .select2-search__field:valid ~ .valid-tooltip,
.was-validated .typeahead:valid ~ .valid-tooltip,
.was-validated
.tt-query:valid ~ .valid-tooltip,
.was-validated
.tt-hint:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .is-valid.asColorPicker-input ~ .valid-feedback, .dataTables_wrapper select.is-valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text] ~ .valid-feedback,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number] ~ .valid-feedback, .select2-container--default .is-valid.select2-selection--single ~ .valid-feedback, .select2-container--default .select2-selection--single .is-valid.select2-search__field ~ .valid-feedback, .is-valid.typeahead ~ .valid-feedback,
.is-valid.tt-query ~ .valid-feedback,
.is-valid.tt-hint ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip, .is-valid.asColorPicker-input ~ .valid-tooltip, .dataTables_wrapper select.is-valid ~ .valid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text] ~ .valid-tooltip,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid ~ .valid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number] ~ .valid-tooltip, .select2-container--default .is-valid.select2-selection--single ~ .valid-tooltip, .select2-container--default .select2-selection--single .is-valid.select2-search__field ~ .valid-tooltip, .is-valid.typeahead ~ .valid-tooltip,
.is-valid.tt-query ~ .valid-tooltip,
.is-valid.tt-hint ~ .valid-tooltip, .was-validated
.custom-select:valid ~ .valid-feedback,
.was-validated
.custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  background-color: #71dd8a;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #ffffff;
  background-color: rgba(220, 53, 69, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:invalid, .was-validated .asColorPicker-input:invalid, .was-validated .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:invalid, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:invalid,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:invalid, .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid, .was-validated
.tt-query:invalid, .was-validated
.tt-hint:invalid, .form-control.is-invalid, .is-invalid.asColorPicker-input, .dataTables_wrapper select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-control:invalid:focus, .was-validated .asColorPicker-input:invalid:focus, .was-validated .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:invalid:focus, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:invalid:focus, .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus, .was-validated
.tt-query:invalid:focus, .was-validated
.tt-hint:invalid:focus, .form-control.is-invalid:focus, .is-invalid.asColorPicker-input:focus, .dataTables_wrapper select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number]:focus, .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
.is-invalid.tt-query:focus,
.is-invalid.tt-hint:focus, .was-validated
.custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .asColorPicker-input:invalid ~ .invalid-feedback, .was-validated .dataTables_wrapper select:invalid ~ .invalid-feedback, .dataTables_wrapper .was-validated select:invalid ~ .invalid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=text]:invalid ~ .invalid-feedback, .was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:invalid ~ .invalid-feedback,
.jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid ~ .invalid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input[type=number]:invalid ~ .invalid-feedback, .was-validated .select2-container--default .select2-selection--single:invalid ~ .invalid-feedback, .select2-container--default .was-validated .select2-selection--single:invalid ~ .invalid-feedback, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid ~ .invalid-feedback, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid ~ .invalid-feedback, .was-validated .typeahead:invalid ~ .invalid-feedback, .was-validated
.tt-query:invalid ~ .invalid-feedback, .was-validated
.tt-hint:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip,
.was-validated .asColorPicker-input:invalid ~ .invalid-tooltip,
.was-validated .dataTables_wrapper select:invalid ~ .invalid-tooltip, .dataTables_wrapper
.was-validated select:invalid ~ .invalid-tooltip,
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:invalid ~ .invalid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated input[type=text]:invalid ~ .invalid-tooltip,
.was-validated
.jsgrid .jsgrid-table .jsgrid-filter-row select:invalid ~ .invalid-tooltip,
.jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated select:invalid ~ .invalid-tooltip,
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:invalid ~ .invalid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row
.was-validated input[type=number]:invalid ~ .invalid-tooltip,
.was-validated .select2-container--default .select2-selection--single:invalid ~ .invalid-tooltip, .select2-container--default
.was-validated .select2-selection--single:invalid ~ .invalid-tooltip,
.was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid ~ .invalid-tooltip, .select2-container--default .select2-selection--single
.was-validated .select2-search__field:invalid ~ .invalid-tooltip,
.was-validated .typeahead:invalid ~ .invalid-tooltip,
.was-validated
.tt-query:invalid ~ .invalid-tooltip,
.was-validated
.tt-hint:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .is-invalid.asColorPicker-input ~ .invalid-feedback, .dataTables_wrapper select.is-invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text] ~ .invalid-feedback,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number] ~ .invalid-feedback, .select2-container--default .is-invalid.select2-selection--single ~ .invalid-feedback, .select2-container--default .select2-selection--single .is-invalid.select2-search__field ~ .invalid-feedback, .is-invalid.typeahead ~ .invalid-feedback,
.is-invalid.tt-query ~ .invalid-feedback,
.is-invalid.tt-hint ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip, .is-invalid.asColorPicker-input ~ .invalid-tooltip, .dataTables_wrapper select.is-invalid ~ .invalid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text] ~ .invalid-tooltip,
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid ~ .invalid-tooltip, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number] ~ .invalid-tooltip, .select2-container--default .is-invalid.select2-selection--single ~ .invalid-tooltip, .select2-container--default .select2-selection--single .is-invalid.select2-search__field ~ .invalid-tooltip, .is-invalid.typeahead ~ .invalid-tooltip,
.is-invalid.tt-query ~ .invalid-tooltip,
.is-invalid.tt-hint ~ .invalid-tooltip, .was-validated
.custom-select:invalid ~ .invalid-feedback,
.was-validated
.custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  background-color: #efa2a9;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control, .form-inline .asColorPicker-input, .form-inline .dataTables_wrapper select, .dataTables_wrapper .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=text], .form-inline
  .jsgrid .jsgrid-table .jsgrid-filter-row select,
  .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=number], .form-inline .select2-container--default .select2-selection--single, .select2-container--default .form-inline .select2-selection--single, .form-inline .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-inline .select2-search__field, .form-inline .typeahead, .form-inline
  .tt-query, .form-inline
  .tt-hint {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group, .form-inline .asColorPicker-wrap,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.875rem 1.5rem;
  font-size: 1rem;
  line-height: 1;
  border-radius: 0.1875rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
  .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
    transition: none;
  }
}

.btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus {
  text-decoration: none;
}

.btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn.focus, .fc button.focus, .ajax-upload-dragdrop .focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .focus.swal2-styled, .wizard > .actions a.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .fc button.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .disabled.swal2-styled, .wizard > .actions a.disabled, .btn:disabled, .fc button:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .swal2-modal .swal2-buttonswrapper .swal2-styled:disabled, .wizard > .actions a:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled), .fc button:not(:disabled):not(.disabled), .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled), .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled), .wizard > .actions a:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active, .fc button:not(:disabled):not(.disabled):active, .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled):active, .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled):active, .wizard > .actions a:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active, .fc button:not(:disabled):not(.disabled).active, .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled).active, .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled).active, .wizard > .actions a:not(:disabled):not(.disabled).active {
  background-image: none;
}

a.btn.disabled, .ajax-upload-dragdrop a.disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper a.disabled.swal2-styled, .wizard > .actions a.disabled,
fieldset:disabled a.btn,
fieldset:disabled .ajax-upload-dragdrop a.ajax-file-upload, .ajax-upload-dragdrop
fieldset:disabled a.ajax-file-upload,
fieldset:disabled .swal2-modal .swal2-buttonswrapper a.swal2-styled, .swal2-modal .swal2-buttonswrapper
fieldset:disabled a.swal2-styled,
fieldset:disabled .wizard > .actions a, .wizard > .actions
fieldset:disabled a {
  pointer-events: none;
}

.btn-primary, .wizard > .actions a {
  color: #fff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-primary:hover, .wizard > .actions a:hover {
  color: #fff;
  background-color: #2f395d;
  border-color: #2b3354;
}

.btn-primary:focus, .wizard > .actions a:focus, .btn-primary.focus, .wizard > .actions a.focus {
  box-shadow: 0 0 0 0.2rem rgba(60, 72, 118, 0.5);
}

.btn-primary.disabled, .wizard > .actions a.disabled, .btn-primary:disabled, .wizard > .actions a:disabled {
  color: #fff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-primary:not(:disabled):not(.disabled):active, .wizard > .actions a:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .wizard > .actions a:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle, .wizard > .actions
.show > a.dropdown-toggle {
  color: #fff;
  background-color: #2b3354;
  border-color: #272e4c;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .wizard > .actions a:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .wizard > .actions a:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus, .wizard > .actions
.show > a.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(60, 72, 118, 0.5);
}

.btn-secondary, .wizard > .actions .disabled a {
  color: #212529;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-secondary:hover, .wizard > .actions .disabled a:hover {
  color: #212529;
  background-color: #c8cfd9;
  border-color: #c1c9d4;
}

.btn-secondary:focus, .wizard > .actions .disabled a:focus, .btn-secondary.focus, .wizard > .actions .disabled a.focus {
  box-shadow: 0 0 0 0.2rem rgba(223, 227, 233, 0.5);
}

.btn-secondary.disabled, .wizard > .actions .disabled a.disabled, .btn-secondary:disabled, .wizard > .actions .disabled a:disabled {
  color: #212529;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-secondary:not(:disabled):not(.disabled):active, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle, .wizard > .actions .disabled
.show > a.dropdown-toggle {
  color: #212529;
  background-color: #c1c9d4;
  border-color: #b9c2cf;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus, .wizard > .actions .disabled
.show > a.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(223, 227, 233, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-success:hover {
  color: #fff;
  background-color: #5d9e12;
  border-color: #569211;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(113, 192, 22, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #569211;
  border-color: #4f870f;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(113, 192, 22, 0.5);
}

.btn-info {
  color: #212529;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-info:hover {
  color: #212529;
  background-color: #9697df;
  border-color: #8c8ddc;
}

.btn-info:focus, .btn-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(179, 180, 232, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #212529;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #8c8ddc;
  border-color: #8284d9;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(179, 180, 232, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-warning:hover {
  color: #212529;
  background-color: #d9a400;
  border-color: #cc9a00;
}

.btn-warning:focus, .btn-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 0, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #cc9a00;
  border-color: #bf9100;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 0, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-danger:hover {
  color: #fff;
  background-color: #fb303e;
  border-color: #fb2432;
}

.btn-danger:focus, .btn-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(252, 86, 97, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #fb2432;
  border-color: #fb1726;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(252, 86, 97, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #000000;
  border-color: #000000;
}

.btn-dark:hover {
  color: #fff;
  background-color: black;
  border-color: black;
}

.btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #000000;
  border-color: #000000;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: black;
  border-color: black;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
}

.btn-outline-primary {
  color: #3c4876;
  background-color: transparent;
  background-image: none;
  border-color: #3c4876;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(60, 72, 118, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #3c4876;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(60, 72, 118, 0.5);
}

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  color: #dfe3e9;
  background-color: transparent;
  background-image: none;
  border-color: #dfe3e9;
}

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
  color: #212529;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus, .btn-outline-secondary.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-cancel {
  box-shadow: 0 0 0 0.2rem rgba(223, 227, 233, 0.5);
}

.btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel, .btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled {
  color: #dfe3e9;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle, .editable-container.editable-inline .editableform .control-group .editable-buttons
.show > .dropdown-toggle.editable-cancel {
  color: #212529;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons
.show > .dropdown-toggle.editable-cancel:focus {
  box-shadow: 0 0 0 0.2rem rgba(223, 227, 233, 0.5);
}

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  color: #71c016;
  background-color: transparent;
  background-image: none;
  border-color: #71c016;
}

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
  color: #fff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus, .btn-outline-success.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-submit {
  box-shadow: 0 0 0 0.2rem rgba(113, 192, 22, 0.5);
}

.btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit, .btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled {
  color: #71c016;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle, .editable-container.editable-inline .editableform .control-group .editable-buttons
.show > .dropdown-toggle.editable-submit {
  color: #fff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons
.show > .dropdown-toggle.editable-submit:focus {
  box-shadow: 0 0 0 0.2rem rgba(113, 192, 22, 0.5);
}

.btn-outline-info {
  color: #b3b4e8;
  background-color: transparent;
  background-image: none;
  border-color: #b3b4e8;
}

.btn-outline-info:hover {
  color: #212529;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(179, 180, 232, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #b3b4e8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #212529;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(179, 180, 232, 0.5);
}

.btn-outline-warning {
  color: #ffc100;
  background-color: transparent;
  background-image: none;
  border-color: #ffc100;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 0, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc100;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 0, 0.5);
}

.btn-outline-danger {
  color: #fc5661;
  background-color: transparent;
  background-image: none;
  border-color: #fc5661;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(252, 86, 97, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #fc5661;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(252, 86, 97, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #000000;
  background-color: transparent;
  background-image: none;
  border-color: #000000;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #000000;
  border-color: #000000;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #000000;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #000000;
  border-color: #000000;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  background-color: transparent;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a {
  padding: 1rem 3rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media screen and (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #000;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e9e8ef;
  border-radius: 0.25rem;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9e8ef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #000;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #eaeaf1;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #000;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #000;
}

.btn-group, .fc .fc-button-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn, .fc .fc-button-group > .btn, .fc .btn-group > button, .fc .fc-button-group > button, .ajax-upload-dragdrop .btn-group > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled, .wizard > .actions .btn-group > a, .fc .wizard > .actions .fc-button-group > a, .wizard > .actions .fc .fc-button-group > a,
.btn-group-vertical > .btn, .fc
.btn-group-vertical > button, .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled, .wizard > .actions
.btn-group-vertical > a {
  position: relative;
  flex: 0 1 auto;
}

.btn-group > .btn:hover, .fc .fc-button-group > .btn:hover, .fc .btn-group > button:hover, .fc .fc-button-group > button:hover, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:hover, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:hover, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:hover, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:hover, .wizard > .actions .btn-group > a:hover, .fc .wizard > .actions .fc-button-group > a:hover, .wizard > .actions .fc .fc-button-group > a:hover,
.btn-group-vertical > .btn:hover, .fc
.btn-group-vertical > button:hover, .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled:hover, .wizard > .actions
.btn-group-vertical > a:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .fc .fc-button-group > .btn:focus, .fc .btn-group > button:focus, .fc .fc-button-group > button:focus, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:focus, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:focus, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:focus, .wizard > .actions .btn-group > a:focus, .fc .wizard > .actions .fc-button-group > a:focus, .wizard > .actions .fc .fc-button-group > a:focus, .btn-group > .btn:active, .fc .fc-button-group > .btn:active, .fc .btn-group > button:active, .fc .fc-button-group > button:active, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:active, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:active, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:active, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:active, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:active, .wizard > .actions .btn-group > a:active, .fc .wizard > .actions .fc-button-group > a:active, .wizard > .actions .fc .fc-button-group > a:active, .btn-group > .btn.active, .fc .fc-button-group > .btn.active, .fc .btn-group > button.active, .fc .fc-button-group > button.active, .ajax-upload-dragdrop .btn-group > .active.ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .active.ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .active.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .active.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .active.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .active.swal2-styled, .wizard > .actions .btn-group > a.active, .fc .wizard > .actions .fc-button-group > a.active, .wizard > .actions .fc .fc-button-group > a.active,
.btn-group-vertical > .btn:focus, .fc
.btn-group-vertical > button:focus, .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled:focus, .wizard > .actions
.btn-group-vertical > a:focus,
.btn-group-vertical > .btn:active, .fc
.btn-group-vertical > button:active, .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled:active, .wizard > .actions
.btn-group-vertical > a:active,
.btn-group-vertical > .btn.active, .fc
.btn-group-vertical > button.active, .ajax-upload-dragdrop
.btn-group-vertical > .active.ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .active.swal2-styled, .wizard > .actions
.btn-group-vertical > a.active {
  z-index: 1;
}

.btn-group .btn + .btn, .fc .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc .fc-button-group button + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn, .btn-group .wizard > .actions a + .btn, .wizard > .actions .btn-group a + .btn, .fc .fc-button-group .wizard > .actions a + .btn, .wizard > .actions .fc .fc-button-group a + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc .fc-button-group button + button, .btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .btn-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .btn-group .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group .ajax-file-upload + button, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + button, .btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .btn-group .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + button, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + button, .btn-group .wizard > .actions .fc a + button, .fc .btn-group .wizard > .actions a + button, .wizard > .actions .btn-group .fc a + button, .fc .wizard > .actions .btn-group a + button, .fc .fc-button-group .wizard > .actions a + button, .wizard > .actions .fc .fc-button-group a + button, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn + .ajax-file-upload, .btn-group .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .fc button + .ajax-file-upload, .fc .btn-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group button + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group button + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .ajax-file-upload, .btn-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .btn-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group a + .ajax-file-upload, .fc .fc-button-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .fc .fc-button-group a + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn + .swal2-styled, .btn-group .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .fc button + .swal2-styled, .fc .btn-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group button + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group button + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .fc .fc-button-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .swal2-styled, .btn-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions a + .swal2-styled, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group a + .swal2-styled, .fc .fc-button-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions a + .swal2-styled, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .fc .fc-button-group a + .swal2-styled, .btn-group .wizard > .actions .btn + a, .wizard > .actions .btn-group .btn + a, .fc .fc-button-group .wizard > .actions .btn + a, .wizard > .actions .fc .fc-button-group .btn + a, .btn-group .fc .wizard > .actions button + a, .wizard > .actions .btn-group .fc button + a, .fc .btn-group .wizard > .actions button + a, .wizard > .actions .fc .btn-group button + a, .fc .fc-button-group .wizard > .actions button + a, .wizard > .actions .fc .fc-button-group button + a, .btn-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .btn-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .btn-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group .ajax-file-upload + a, .fc .fc-button-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + a, .btn-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + a, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + a, .btn-group .wizard > .actions a + a, .wizard > .actions .btn-group a + a, .fc .fc-button-group .wizard > .actions a + a, .wizard > .actions .fc .fc-button-group a + a,
.btn-group .btn + .btn-group, .fc .fc-button-group .btn + .btn-group,
.btn-group .fc button + .btn-group, .fc
.btn-group button + .btn-group, .fc .fc-button-group button + .btn-group,
.btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn-group, .ajax-upload-dragdrop
.btn-group .ajax-file-upload + .btn-group, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn-group, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn-group,
.btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn-group, .swal2-modal .swal2-buttonswrapper
.btn-group .swal2-styled + .btn-group, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn-group, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn-group,
.btn-group .wizard > .actions a + .btn-group, .wizard > .actions
.btn-group a + .btn-group, .fc .fc-button-group .wizard > .actions a + .btn-group, .wizard > .actions .fc .fc-button-group a + .btn-group,
.btn-group .fc .btn + .fc-button-group, .fc
.btn-group .btn + .fc-button-group, .fc .fc-button-group .btn + .fc-button-group,
.btn-group .fc button + .fc-button-group, .fc
.btn-group button + .fc-button-group, .fc .fc-button-group button + .fc-button-group,
.btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + .fc-button-group, .fc
.btn-group .ajax-upload-dragdrop .ajax-file-upload + .fc-button-group, .ajax-upload-dragdrop
.btn-group .fc .ajax-file-upload + .fc-button-group, .fc .ajax-upload-dragdrop
.btn-group .ajax-file-upload + .fc-button-group, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .fc-button-group, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .fc-button-group,
.btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + .fc-button-group, .fc
.btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .fc-button-group, .swal2-modal .swal2-buttonswrapper
.btn-group .fc .swal2-styled + .fc-button-group, .fc .swal2-modal .swal2-buttonswrapper
.btn-group .swal2-styled + .fc-button-group, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .fc-button-group, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .fc-button-group,
.btn-group .wizard > .actions .fc a + .fc-button-group, .fc
.btn-group .wizard > .actions a + .fc-button-group, .wizard > .actions
.btn-group .fc a + .fc-button-group, .fc .wizard > .actions
.btn-group a + .fc-button-group, .fc .fc-button-group .wizard > .actions a + .fc-button-group, .wizard > .actions .fc .fc-button-group a + .fc-button-group,
.btn-group .btn-group + .btn, .fc .fc-button-group .btn-group + .btn,
.btn-group .fc .fc-button-group + .btn, .fc
.btn-group .fc-button-group + .btn, .fc .fc-button-group .fc-button-group + .btn,
.btn-group .fc .btn-group + button, .fc
.btn-group .btn-group + button, .fc .fc-button-group .btn-group + button,
.btn-group .fc .fc-button-group + button, .fc
.btn-group .fc-button-group + button, .fc .fc-button-group .fc-button-group + button,
.btn-group .ajax-upload-dragdrop .btn-group + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group .btn-group + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn-group + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn-group + .ajax-file-upload,
.btn-group .fc .ajax-upload-dragdrop .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group .fc .fc-button-group + .ajax-file-upload, .fc
.btn-group .ajax-upload-dragdrop .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group .fc-button-group + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .fc-button-group + .ajax-file-upload,
.btn-group .swal2-modal .swal2-buttonswrapper .btn-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group .btn-group + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn-group + .swal2-styled,
.btn-group .fc .swal2-modal .swal2-buttonswrapper .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group .fc .fc-button-group + .swal2-styled, .fc
.btn-group .swal2-modal .swal2-buttonswrapper .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group .fc-button-group + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .fc-button-group + .swal2-styled,
.btn-group .wizard > .actions .btn-group + a, .wizard > .actions
.btn-group .btn-group + a, .fc .fc-button-group .wizard > .actions .btn-group + a, .wizard > .actions .fc .fc-button-group .btn-group + a,
.btn-group .fc .wizard > .actions .fc-button-group + a, .wizard > .actions
.btn-group .fc .fc-button-group + a, .fc
.btn-group .wizard > .actions .fc-button-group + a, .wizard > .actions .fc
.btn-group .fc-button-group + a, .fc .fc-button-group .wizard > .actions .fc-button-group + a, .wizard > .actions .fc .fc-button-group .fc-button-group + a,
.btn-group .btn-group + .btn-group, .fc .fc-button-group .btn-group + .btn-group,
.btn-group .fc .fc-button-group + .btn-group, .fc
.btn-group .fc-button-group + .btn-group, .fc .fc-button-group .fc-button-group + .btn-group,
.btn-group .fc .btn-group + .fc-button-group, .fc
.btn-group .btn-group + .fc-button-group, .fc .fc-button-group .btn-group + .fc-button-group,
.btn-group .fc .fc-button-group + .fc-button-group, .fc
.btn-group .fc-button-group + .fc-button-group, .fc .fc-button-group .fc-button-group + .fc-button-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .fc button + .btn, .fc
.btn-group-vertical button + .btn,
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + .btn,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + .btn,
.btn-group-vertical .wizard > .actions a + .btn, .wizard > .actions
.btn-group-vertical a + .btn,
.btn-group-vertical .fc .btn + button, .fc
.btn-group-vertical .btn + button,
.btn-group-vertical .fc button + button, .fc
.btn-group-vertical button + button,
.btn-group-vertical .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop
.btn-group-vertical .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + button,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + button,
.btn-group-vertical .wizard > .actions .fc a + button, .fc
.btn-group-vertical .wizard > .actions a + button, .wizard > .actions
.btn-group-vertical .fc a + button, .fc .wizard > .actions
.btn-group-vertical a + button,
.btn-group-vertical .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .btn + .ajax-file-upload,
.btn-group-vertical .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .fc button + .ajax-file-upload, .fc
.btn-group-vertical .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-vertical button + .ajax-file-upload,
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + .ajax-file-upload,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + .ajax-file-upload,
.btn-group-vertical .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .wizard > .actions a + .ajax-file-upload, .wizard > .actions
.btn-group-vertical .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions
.btn-group-vertical a + .ajax-file-upload,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .btn + .swal2-styled,
.btn-group-vertical .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .fc button + .swal2-styled, .fc
.btn-group-vertical .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical button + .swal2-styled,
.btn-group-vertical .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + .swal2-styled,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + .swal2-styled,
.btn-group-vertical .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .wizard > .actions a + .swal2-styled, .wizard > .actions
.btn-group-vertical .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions
.btn-group-vertical a + .swal2-styled,
.btn-group-vertical .wizard > .actions .btn + a, .wizard > .actions
.btn-group-vertical .btn + a,
.btn-group-vertical .fc .wizard > .actions button + a, .wizard > .actions
.btn-group-vertical .fc button + a, .fc
.btn-group-vertical .wizard > .actions button + a, .wizard > .actions .fc
.btn-group-vertical button + a,
.btn-group-vertical .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop
.btn-group-vertical .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + a,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + a,
.btn-group-vertical .wizard > .actions a + a, .wizard > .actions
.btn-group-vertical a + a,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .fc button + .btn-group, .fc
.btn-group-vertical button + .btn-group,
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + .btn-group, .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + .btn-group,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn-group, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + .btn-group,
.btn-group-vertical .wizard > .actions a + .btn-group, .wizard > .actions
.btn-group-vertical a + .btn-group,
.btn-group-vertical .fc .btn + .fc-button-group, .fc
.btn-group-vertical .btn + .fc-button-group,
.btn-group-vertical .fc button + .fc-button-group, .fc
.btn-group-vertical button + .fc-button-group,
.btn-group-vertical .ajax-upload-dragdrop .fc .ajax-file-upload + .fc-button-group, .fc
.btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload + .fc-button-group, .ajax-upload-dragdrop
.btn-group-vertical .fc .ajax-file-upload + .fc-button-group, .fc .ajax-upload-dragdrop
.btn-group-vertical .ajax-file-upload + .fc-button-group,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + .fc-button-group, .fc
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled + .fc-button-group, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .fc .swal2-styled + .fc-button-group, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .swal2-styled + .fc-button-group,
.btn-group-vertical .wizard > .actions .fc a + .fc-button-group, .fc
.btn-group-vertical .wizard > .actions a + .fc-button-group, .wizard > .actions
.btn-group-vertical .fc a + .fc-button-group, .fc .wizard > .actions
.btn-group-vertical a + .fc-button-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .fc .fc-button-group + .btn, .fc
.btn-group-vertical .fc-button-group + .btn,
.btn-group-vertical .fc .btn-group + button, .fc
.btn-group-vertical .btn-group + button,
.btn-group-vertical .fc .fc-button-group + button, .fc
.btn-group-vertical .fc-button-group + button,
.btn-group-vertical .ajax-upload-dragdrop .btn-group + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .btn-group + .ajax-file-upload,
.btn-group-vertical .fc .ajax-upload-dragdrop .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop
.btn-group-vertical .fc .fc-button-group + .ajax-file-upload, .fc
.btn-group-vertical .ajax-upload-dragdrop .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-vertical .fc-button-group + .ajax-file-upload,
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .btn-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .btn-group + .swal2-styled,
.btn-group-vertical .fc .swal2-modal .swal2-buttonswrapper .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical .fc .fc-button-group + .swal2-styled, .fc
.btn-group-vertical .swal2-modal .swal2-buttonswrapper .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical .fc-button-group + .swal2-styled,
.btn-group-vertical .wizard > .actions .btn-group + a, .wizard > .actions
.btn-group-vertical .btn-group + a,
.btn-group-vertical .fc .wizard > .actions .fc-button-group + a, .wizard > .actions
.btn-group-vertical .fc .fc-button-group + a, .fc
.btn-group-vertical .wizard > .actions .fc-button-group + a, .wizard > .actions .fc
.btn-group-vertical .fc-button-group + a,
.btn-group-vertical .btn-group + .btn-group,
.btn-group-vertical .fc .fc-button-group + .btn-group, .fc
.btn-group-vertical .fc-button-group + .btn-group,
.btn-group-vertical .fc .btn-group + .fc-button-group, .fc
.btn-group-vertical .btn-group + .fc-button-group,
.btn-group-vertical .fc .fc-button-group + .fc-button-group, .fc
.btn-group-vertical .fc-button-group + .fc-button-group {
  margin-left: -1px;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group, .btn-toolbar .asColorPicker-wrap {
  width: auto;
}

.btn-group > .btn:first-child, .fc .fc-button-group > .btn:first-child, .fc .btn-group > button:first-child, .fc .fc-button-group > button:first-child, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:first-child, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:first-child, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:first-child, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:first-child, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:first-child, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:first-child, .wizard > .actions .btn-group > a:first-child, .fc .wizard > .actions .fc-button-group > a:first-child, .wizard > .actions .fc .fc-button-group > a:first-child {
  margin-left: 0;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group > button:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group > a:not(:last-child):not(.dropdown-toggle), .fc .wizard > .actions .fc-button-group > a:not(:last-child):not(.dropdown-toggle), .wizard > .actions .fc .fc-button-group > a:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn, .fc .fc-button-group > .btn-group:not(:last-child) > .btn, .fc
.btn-group > .fc-button-group:not(:last-child) > .btn, .fc .fc-button-group > .fc-button-group:not(:last-child) > .btn, .fc
.btn-group > .btn-group:not(:last-child) > button, .fc .fc-button-group > .btn-group:not(:last-child) > button, .fc
.btn-group > .fc-button-group:not(:last-child) > button, .fc .fc-button-group > .fc-button-group:not(:last-child) > button, .ajax-upload-dragdrop
.btn-group > .btn-group:not(:last-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group > .btn-group:not(:last-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:last-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:last-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group > .fc-button-group:not(:last-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group > .fc-button-group:not(:last-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled, .wizard > .actions
.btn-group > .btn-group:not(:last-child) > a, .fc .wizard > .actions .fc-button-group > .btn-group:not(:last-child) > a, .wizard > .actions .fc .fc-button-group > .btn-group:not(:last-child) > a, .fc .wizard > .actions
.btn-group > .fc-button-group:not(:last-child) > a, .wizard > .actions .fc
.btn-group > .fc-button-group:not(:last-child) > a, .fc .wizard > .actions .fc-button-group > .fc-button-group:not(:last-child) > a, .wizard > .actions .fc .fc-button-group > .fc-button-group:not(:last-child) > a {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn, .fc .fc-button-group > .btn-group:not(:first-child) > .btn, .fc
.btn-group > .fc-button-group:not(:first-child) > .btn, .fc .fc-button-group > .fc-button-group:not(:first-child) > .btn, .fc
.btn-group > .btn-group:not(:first-child) > button, .fc .fc-button-group > .btn-group:not(:first-child) > button, .fc
.btn-group > .fc-button-group:not(:first-child) > button, .fc .fc-button-group > .fc-button-group:not(:first-child) > button, .ajax-upload-dragdrop
.btn-group > .btn-group:not(:first-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group > .btn-group:not(:first-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:first-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:first-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group > .fc-button-group:not(:first-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group > .fc-button-group:not(:first-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled, .wizard > .actions
.btn-group > .btn-group:not(:first-child) > a, .fc .wizard > .actions .fc-button-group > .btn-group:not(:first-child) > a, .wizard > .actions .fc .fc-button-group > .btn-group:not(:first-child) > a, .fc .wizard > .actions
.btn-group > .fc-button-group:not(:first-child) > a, .wizard > .actions .fc
.btn-group > .fc-button-group:not(:first-child) > a, .fc .wizard > .actions .fc-button-group > .fc-button-group:not(:first-child) > a, .wizard > .actions .fc .fc-button-group > .fc-button-group:not(:first-child) > a {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .fc .btn-group-sm > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-sm > a + .dropdown-toggle-split, .fc button + .dropdown-toggle-split {
  padding-right: 0.6075rem;
  padding-left: 0.6075rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .fc .btn-group-lg > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-lg > a + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

.btn-group-vertical .btn, .btn-group-vertical .fc button, .fc .btn-group-vertical button, .btn-group-vertical .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .btn-group-vertical .ajax-file-upload, .btn-group-vertical .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group-vertical .swal2-styled, .btn-group-vertical .wizard > .actions a, .wizard > .actions .btn-group-vertical a,
.btn-group-vertical .btn-group,
.btn-group-vertical .fc .fc-button-group, .fc
.btn-group-vertical .fc-button-group {
  width: 100%;
}

.btn-group-vertical > .btn + .btn, .fc .btn-group-vertical > button + .btn, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload + .btn, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled + .btn, .wizard > .actions .btn-group-vertical > a + .btn, .fc .btn-group-vertical > .btn + button, .fc .btn-group-vertical > button + button, .ajax-upload-dragdrop .fc .btn-group-vertical > .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload + button, .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled + button, .wizard > .actions .fc .btn-group-vertical > a + button, .fc .wizard > .actions .btn-group-vertical > a + button, .ajax-upload-dragdrop .btn-group-vertical > .btn + .ajax-file-upload, .fc .ajax-upload-dragdrop .btn-group-vertical > button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group-vertical > button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled + .ajax-file-upload, .wizard > .actions .ajax-upload-dragdrop .btn-group-vertical > a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group-vertical > a + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn + .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > button + .swal2-styled, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled + .swal2-styled, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group-vertical > a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group-vertical > a + .swal2-styled, .wizard > .actions .btn-group-vertical > .btn + a, .fc .wizard > .actions .btn-group-vertical > button + a, .wizard > .actions .fc .btn-group-vertical > button + a, .ajax-upload-dragdrop .wizard > .actions .btn-group-vertical > .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload + a, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group-vertical > .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled + a, .wizard > .actions .btn-group-vertical > a + a,
.btn-group-vertical > .btn + .btn-group, .fc
.btn-group-vertical > button + .btn-group, .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload + .btn-group, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled + .btn-group, .wizard > .actions
.btn-group-vertical > a + .btn-group, .fc
.btn-group-vertical > .btn + .fc-button-group, .fc
.btn-group-vertical > button + .fc-button-group, .ajax-upload-dragdrop .fc
.btn-group-vertical > .ajax-file-upload + .fc-button-group, .fc .ajax-upload-dragdrop
.btn-group-vertical > .ajax-file-upload + .fc-button-group, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical > .swal2-styled + .fc-button-group, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .swal2-styled + .fc-button-group, .wizard > .actions .fc
.btn-group-vertical > a + .fc-button-group, .fc .wizard > .actions
.btn-group-vertical > a + .fc-button-group,
.btn-group-vertical > .btn-group + .btn, .fc
.btn-group-vertical > .fc-button-group + .btn, .fc
.btn-group-vertical > .btn-group + button, .fc
.btn-group-vertical > .fc-button-group + button, .ajax-upload-dragdrop
.btn-group-vertical > .btn-group + .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group-vertical > .fc-button-group + .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-vertical > .fc-button-group + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .btn-group + .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .fc-button-group + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical > .fc-button-group + .swal2-styled, .wizard > .actions
.btn-group-vertical > .btn-group + a, .fc .wizard > .actions
.btn-group-vertical > .fc-button-group + a, .wizard > .actions .fc
.btn-group-vertical > .fc-button-group + a,
.btn-group-vertical > .btn-group + .btn-group, .fc
.btn-group-vertical > .fc-button-group + .btn-group, .fc
.btn-group-vertical > .btn-group + .fc-button-group, .fc
.btn-group-vertical > .fc-button-group + .fc-button-group {
  margin-top: -1px;
  margin-left: 0;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group-vertical > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group-vertical > a:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn, .fc
.btn-group-vertical > .fc-button-group:not(:last-child) > .btn, .fc
.btn-group-vertical > .btn-group:not(:last-child) > button, .fc
.btn-group-vertical > .fc-button-group:not(:last-child) > button, .ajax-upload-dragdrop
.btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .btn-group:not(:last-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled, .wizard > .actions
.btn-group-vertical > .btn-group:not(:last-child) > a, .fc .wizard > .actions
.btn-group-vertical > .fc-button-group:not(:last-child) > a, .wizard > .actions .fc
.btn-group-vertical > .fc-button-group:not(:last-child) > a {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn, .fc
.btn-group-vertical > .fc-button-group:not(:first-child) > .btn, .fc
.btn-group-vertical > .btn-group:not(:first-child) > button, .fc
.btn-group-vertical > .fc-button-group:not(:first-child) > button, .ajax-upload-dragdrop
.btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .btn-group:not(:first-child) > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled, .wizard > .actions
.btn-group-vertical > .btn-group:not(:first-child) > a, .fc .wizard > .actions
.btn-group-vertical > .fc-button-group:not(:first-child) > a, .wizard > .actions .fc
.btn-group-vertical > .fc-button-group:not(:first-child) > a {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn, .fc .btn-group-toggle > button, .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled, .wizard > .actions .btn-group-toggle > a,
.btn-group-toggle > .btn-group > .btn, .fc
.btn-group-toggle > .fc-button-group > .btn, .fc
.btn-group-toggle > .btn-group > button, .fc
.btn-group-toggle > .fc-button-group > button, .ajax-upload-dragdrop
.btn-group-toggle > .btn-group > .ajax-file-upload, .fc .ajax-upload-dragdrop
.btn-group-toggle > .fc-button-group > .ajax-file-upload, .ajax-upload-dragdrop .fc
.btn-group-toggle > .fc-button-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .btn-group > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .fc-button-group > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.btn-group-toggle > .fc-button-group > .swal2-styled, .wizard > .actions
.btn-group-toggle > .btn-group > a, .fc .wizard > .actions
.btn-group-toggle > .fc-button-group > a, .wizard > .actions .fc
.btn-group-toggle > .fc-button-group > a {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"], .fc .btn-group-toggle > button input[type="radio"], .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="radio"], .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled input[type="radio"], .wizard > .actions .btn-group-toggle > a input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"], .fc
.btn-group-toggle > button input[type="checkbox"], .ajax-upload-dragdrop
.btn-group-toggle > .ajax-file-upload input[type="checkbox"], .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .swal2-styled input[type="checkbox"], .wizard > .actions
.btn-group-toggle > a input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"], .fc
.btn-group-toggle > .fc-button-group > .btn input[type="radio"], .fc
.btn-group-toggle > .btn-group > button input[type="radio"], .fc
.btn-group-toggle > .fc-button-group > button input[type="radio"], .ajax-upload-dragdrop
.btn-group-toggle > .btn-group > .ajax-file-upload input[type="radio"], .fc .ajax-upload-dragdrop
.btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"], .ajax-upload-dragdrop .fc
.btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"], .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .btn-group > .swal2-styled input[type="radio"], .fc .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"], .swal2-modal .swal2-buttonswrapper .fc
.btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"], .wizard > .actions
.btn-group-toggle > .btn-group > a input[type="radio"], .fc .wizard > .actions
.btn-group-toggle > .fc-button-group > a input[type="radio"], .wizard > .actions .fc
.btn-group-toggle > .fc-button-group > a input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"], .fc
.btn-group-toggle > .fc-button-group > .btn input[type="checkbox"], .fc
.btn-group-toggle > .btn-group > button input[type="checkbox"], .fc
.btn-group-toggle > .fc-button-group > button input[type="checkbox"], .ajax-upload-dragdrop
.btn-group-toggle > .btn-group > .ajax-file-upload input[type="checkbox"], .fc .ajax-upload-dragdrop
.btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"], .ajax-upload-dragdrop .fc
.btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"], .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .btn-group > .swal2-styled input[type="checkbox"], .fc .swal2-modal .swal2-buttonswrapper
.btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"], .swal2-modal .swal2-buttonswrapper .fc
.btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"], .wizard > .actions
.btn-group-toggle > .btn-group > a input[type="checkbox"], .fc .wizard > .actions
.btn-group-toggle > .fc-button-group > a input[type="checkbox"], .wizard > .actions .fc
.btn-group-toggle > .fc-button-group > a input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group, .asColorPicker-wrap {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control, .asColorPicker-wrap > .form-control, .input-group > .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input, .dataTables_wrapper .input-group > select, .dataTables_wrapper .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number], .select2-container--default .input-group > .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field, .input-group > .typeahead, .asColorPicker-wrap > .typeahead, .input-group >
.tt-query, .asColorPicker-wrap >
.tt-query, .input-group >
.tt-hint, .asColorPicker-wrap >
.tt-hint,
.input-group > .custom-select, .asColorPicker-wrap > .custom-select,
.input-group > .custom-file, .asColorPicker-wrap > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control:focus, .asColorPicker-wrap > .form-control:focus, .input-group > .asColorPicker-input:focus, .asColorPicker-wrap > .asColorPicker-input:focus, .dataTables_wrapper .input-group > select:focus, .dataTables_wrapper .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number]:focus, .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .asColorPicker-wrap > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:focus, .input-group > .typeahead:focus, .asColorPicker-wrap > .typeahead:focus, .input-group >
.tt-query:focus, .asColorPicker-wrap >
.tt-query:focus, .input-group >
.tt-hint:focus, .asColorPicker-wrap >
.tt-hint:focus,
.input-group > .custom-select:focus, .asColorPicker-wrap > .custom-select:focus,
.input-group > .custom-file:focus, .asColorPicker-wrap > .custom-file:focus {
  z-index: 3;
}

.input-group > .form-control + .form-control, .asColorPicker-wrap > .form-control + .form-control, .input-group > .asColorPicker-input + .form-control, .asColorPicker-wrap > .asColorPicker-input + .form-control, .dataTables_wrapper .input-group > select + .form-control, .dataTables_wrapper .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .form-control,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .form-control,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .form-control, .select2-container--default .input-group > .select2-selection--single + .form-control, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .form-control, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .form-control, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .form-control, .input-group > .typeahead + .form-control, .asColorPicker-wrap > .typeahead + .form-control, .input-group >
.tt-query + .form-control, .asColorPicker-wrap >
.tt-query + .form-control, .input-group >
.tt-hint + .form-control, .asColorPicker-wrap >
.tt-hint + .form-control, .input-group > .form-control + .asColorPicker-input, .asColorPicker-wrap > .form-control + .asColorPicker-input, .input-group > .asColorPicker-input + .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input + .asColorPicker-input, .dataTables_wrapper .input-group > select + .asColorPicker-input, .dataTables_wrapper .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .asColorPicker-input,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .asColorPicker-input,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .asColorPicker-input, .select2-container--default .input-group > .select2-selection--single + .asColorPicker-input, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .asColorPicker-input, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .asColorPicker-input, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .asColorPicker-input, .input-group > .typeahead + .asColorPicker-input, .asColorPicker-wrap > .typeahead + .asColorPicker-input, .input-group >
.tt-query + .asColorPicker-input, .asColorPicker-wrap >
.tt-query + .asColorPicker-input, .input-group >
.tt-hint + .asColorPicker-input, .asColorPicker-wrap >
.tt-hint + .asColorPicker-input, .dataTables_wrapper .input-group > .form-control + select, .dataTables_wrapper .asColorPicker-wrap > .form-control + select, .dataTables_wrapper .input-group > .asColorPicker-input + select, .dataTables_wrapper .asColorPicker-wrap > .asColorPicker-input + select, .dataTables_wrapper .input-group > select + select, .dataTables_wrapper .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select, .dataTables_wrapper
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select, .dataTables_wrapper
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select, .select2-container--default .dataTables_wrapper .input-group > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .input-group > .select2-selection--single + select, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > .select2-selection--single + select, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > .select2-search__field + select, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .input-group > .typeahead + select, .dataTables_wrapper .asColorPicker-wrap > .typeahead + select, .dataTables_wrapper .input-group >
.tt-query + select, .dataTables_wrapper .asColorPicker-wrap >
.tt-query + select, .dataTables_wrapper .input-group >
.tt-hint + select, .dataTables_wrapper .asColorPicker-wrap >
.tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-hint + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-hint + input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + select, .dataTables_wrapper
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select, .dataTables_wrapper
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select, .select2-container--default
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + select, .select2-container--default
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + select, .select2-container--default .select2-selection--single
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + select, .select2-container--default .select2-selection--single
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-query + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-query + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-hint + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group >
.tt-hint + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap >
.tt-hint + input[type=number], .select2-container--default .input-group > .form-control + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .form-control + .select2-selection--single, .select2-container--default .input-group > .asColorPicker-input + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .asColorPicker-input + .select2-selection--single, .dataTables_wrapper .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .input-group > select + .select2-selection--single, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-selection--single,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-selection--single,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .input-group > .select2-selection--single + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-selection--single, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-selection--single, .select2-container--default .input-group > .typeahead + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .typeahead + .select2-selection--single, .select2-container--default .input-group >
.tt-query + .select2-selection--single, .select2-container--default .asColorPicker-wrap >
.tt-query + .select2-selection--single, .select2-container--default .input-group >
.tt-hint + .select2-selection--single, .select2-container--default .asColorPicker-wrap >
.tt-hint + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .asColorPicker-input + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .asColorPicker-input + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > select + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-search__field,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-search__field,
.jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .input-group >
.tt-query + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap >
.tt-query + .select2-search__field, .select2-container--default .select2-selection--single .input-group >
.tt-hint + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap >
.tt-hint + .select2-search__field, .input-group > .form-control + .typeahead, .asColorPicker-wrap > .form-control + .typeahead, .input-group > .asColorPicker-input + .typeahead, .asColorPicker-wrap > .asColorPicker-input + .typeahead, .dataTables_wrapper .input-group > select + .typeahead, .dataTables_wrapper .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .typeahead,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .typeahead,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .typeahead, .select2-container--default .input-group > .select2-selection--single + .typeahead, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .typeahead, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .typeahead, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .typeahead, .input-group > .typeahead + .typeahead, .asColorPicker-wrap > .typeahead + .typeahead, .input-group >
.tt-query + .typeahead, .asColorPicker-wrap >
.tt-query + .typeahead, .input-group >
.tt-hint + .typeahead, .asColorPicker-wrap >
.tt-hint + .typeahead, .input-group > .form-control +
.tt-query, .asColorPicker-wrap > .form-control +
.tt-query, .input-group > .asColorPicker-input +
.tt-query, .asColorPicker-wrap > .asColorPicker-input +
.tt-query, .dataTables_wrapper .input-group > select +
.tt-query, .dataTables_wrapper .asColorPicker-wrap > select +
.tt-query, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] +
.tt-query, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] +
.tt-query,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select +
.tt-query,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select +
.tt-query, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] +
.tt-query, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] +
.tt-query, .select2-container--default .input-group > .select2-selection--single +
.tt-query, .select2-container--default .asColorPicker-wrap > .select2-selection--single +
.tt-query, .select2-container--default .select2-selection--single .input-group > .select2-search__field +
.tt-query, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field +
.tt-query, .input-group > .typeahead +
.tt-query, .asColorPicker-wrap > .typeahead +
.tt-query, .input-group >
.tt-query +
.tt-query, .asColorPicker-wrap >
.tt-query +
.tt-query, .input-group >
.tt-hint +
.tt-query, .asColorPicker-wrap >
.tt-hint +
.tt-query, .input-group > .form-control +
.tt-hint, .asColorPicker-wrap > .form-control +
.tt-hint, .input-group > .asColorPicker-input +
.tt-hint, .asColorPicker-wrap > .asColorPicker-input +
.tt-hint, .dataTables_wrapper .input-group > select +
.tt-hint, .dataTables_wrapper .asColorPicker-wrap > select +
.tt-hint, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] +
.tt-hint, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] +
.tt-hint,
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select +
.tt-hint,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select +
.tt-hint, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] +
.tt-hint, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] +
.tt-hint, .select2-container--default .input-group > .select2-selection--single +
.tt-hint, .select2-container--default .asColorPicker-wrap > .select2-selection--single +
.tt-hint, .select2-container--default .select2-selection--single .input-group > .select2-search__field +
.tt-hint, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field +
.tt-hint, .input-group > .typeahead +
.tt-hint, .asColorPicker-wrap > .typeahead +
.tt-hint, .input-group >
.tt-query +
.tt-hint, .asColorPicker-wrap >
.tt-query +
.tt-hint, .input-group >
.tt-hint +
.tt-hint, .asColorPicker-wrap >
.tt-hint +
.tt-hint,
.input-group > .form-control + .custom-select, .asColorPicker-wrap > .form-control + .custom-select,
.input-group > .asColorPicker-input + .custom-select, .asColorPicker-wrap > .asColorPicker-input + .custom-select, .dataTables_wrapper
.input-group > select + .custom-select, .dataTables_wrapper .asColorPicker-wrap > select + .custom-select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > input[type=text] + .custom-select, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-select,
.jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > select + .custom-select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > input[type=number] + .custom-select, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-select, .select2-container--default
.input-group > .select2-selection--single + .custom-select, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-select, .select2-container--default .select2-selection--single
.input-group > .select2-search__field + .custom-select, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-select,
.input-group > .typeahead + .custom-select, .asColorPicker-wrap > .typeahead + .custom-select,
.input-group >
.tt-query + .custom-select, .asColorPicker-wrap >
.tt-query + .custom-select,
.input-group >
.tt-hint + .custom-select, .asColorPicker-wrap >
.tt-hint + .custom-select,
.input-group > .form-control + .custom-file, .asColorPicker-wrap > .form-control + .custom-file,
.input-group > .asColorPicker-input + .custom-file, .asColorPicker-wrap > .asColorPicker-input + .custom-file, .dataTables_wrapper
.input-group > select + .custom-file, .dataTables_wrapper .asColorPicker-wrap > select + .custom-file, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > input[type=text] + .custom-file, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-file,
.jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > select + .custom-file,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-file, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > input[type=number] + .custom-file, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-file, .select2-container--default
.input-group > .select2-selection--single + .custom-file, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-file, .select2-container--default .select2-selection--single
.input-group > .select2-search__field + .custom-file, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-file,
.input-group > .typeahead + .custom-file, .asColorPicker-wrap > .typeahead + .custom-file,
.input-group >
.tt-query + .custom-file, .asColorPicker-wrap >
.tt-query + .custom-file,
.input-group >
.tt-hint + .custom-file, .asColorPicker-wrap >
.tt-hint + .custom-file,
.input-group > .custom-select + .form-control, .asColorPicker-wrap > .custom-select + .form-control,
.input-group > .custom-select + .asColorPicker-input, .asColorPicker-wrap > .custom-select + .asColorPicker-input, .dataTables_wrapper
.input-group > .custom-select + select, .dataTables_wrapper .asColorPicker-wrap > .custom-select + select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-select + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=number], .select2-container--default
.input-group > .custom-select + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .custom-select + .select2-selection--single, .select2-container--default .select2-selection--single
.input-group > .custom-select + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-select + .select2-search__field,
.input-group > .custom-select + .typeahead, .asColorPicker-wrap > .custom-select + .typeahead,
.input-group > .custom-select +
.tt-query, .asColorPicker-wrap > .custom-select +
.tt-query,
.input-group > .custom-select +
.tt-hint, .asColorPicker-wrap > .custom-select +
.tt-hint,
.input-group > .custom-select + .custom-select, .asColorPicker-wrap > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file, .asColorPicker-wrap > .custom-select + .custom-file,
.input-group > .custom-file + .form-control, .asColorPicker-wrap > .custom-file + .form-control,
.input-group > .custom-file + .asColorPicker-input, .asColorPicker-wrap > .custom-file + .asColorPicker-input, .dataTables_wrapper
.input-group > .custom-file + select, .dataTables_wrapper .asColorPicker-wrap > .custom-file + select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-file + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-file + select,
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + select, .jsgrid .jsgrid-table .jsgrid-filter-row
.input-group > .custom-file + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=number], .select2-container--default
.input-group > .custom-file + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .custom-file + .select2-selection--single, .select2-container--default .select2-selection--single
.input-group > .custom-file + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-file + .select2-search__field,
.input-group > .custom-file + .typeahead, .asColorPicker-wrap > .custom-file + .typeahead,
.input-group > .custom-file +
.tt-query, .asColorPicker-wrap > .custom-file +
.tt-query,
.input-group > .custom-file +
.tt-hint, .asColorPicker-wrap > .custom-file +
.tt-hint,
.input-group > .custom-file + .custom-select, .asColorPicker-wrap > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file, .asColorPicker-wrap > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:not(:last-child), .asColorPicker-wrap > .form-control:not(:last-child), .input-group > .asColorPicker-input:not(:last-child), .asColorPicker-wrap > .asColorPicker-input:not(:last-child), .dataTables_wrapper .input-group > select:not(:last-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text]:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text]:not(:last-child),
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:last-child),
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number]:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number]:not(:last-child), .select2-container--default .input-group > .select2-selection--single:not(:last-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:last-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:last-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:last-child), .input-group > .typeahead:not(:last-child), .asColorPicker-wrap > .typeahead:not(:last-child), .input-group >
.tt-query:not(:last-child), .asColorPicker-wrap >
.tt-query:not(:last-child), .input-group >
.tt-hint:not(:last-child), .asColorPicker-wrap >
.tt-hint:not(:last-child),
.input-group > .custom-select:not(:last-child), .asColorPicker-wrap > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child), .asColorPicker-wrap > .form-control:not(:first-child), .input-group > .asColorPicker-input:not(:first-child), .asColorPicker-wrap > .asColorPicker-input:not(:first-child), .dataTables_wrapper .input-group > select:not(:first-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text]:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text]:not(:first-child),
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:first-child),
.jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number]:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number]:not(:first-child), .select2-container--default .input-group > .select2-selection--single:not(:first-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:first-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:first-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:first-child), .input-group > .typeahead:not(:first-child), .asColorPicker-wrap > .typeahead:not(:first-child), .input-group >
.tt-query:not(:first-child), .asColorPicker-wrap >
.tt-query:not(:first-child), .input-group >
.tt-hint:not(:first-child), .asColorPicker-wrap >
.tt-hint:not(:first-child),
.input-group > .custom-select:not(:first-child), .asColorPicker-wrap > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file, .asColorPicker-wrap > .custom-file {
  display: flex;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after, .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}

.input-group-prepend .btn, .input-group-prepend .fc button, .fc .input-group-prepend button, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled, .input-group-prepend .wizard > .actions a, .wizard > .actions .input-group-prepend a,
.input-group-append .btn,
.input-group-append .fc button, .fc
.input-group-append button,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .ajax-file-upload,
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled,
.input-group-append .wizard > .actions a, .wizard > .actions
.input-group-append a {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn + .btn, .input-group-prepend .fc button + .btn, .fc .input-group-prepend button + .btn, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .btn, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .btn, .input-group-prepend .wizard > .actions a + .btn, .wizard > .actions .input-group-prepend a + .btn, .input-group-prepend .fc .btn + button, .fc .input-group-prepend .btn + button, .input-group-prepend .fc button + button, .fc .input-group-prepend button + button, .input-group-prepend .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .input-group-prepend .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + button, .input-group-prepend .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + button, .input-group-prepend .wizard > .actions .fc a + button, .fc .input-group-prepend .wizard > .actions a + button, .wizard > .actions .input-group-prepend .fc a + button, .fc .wizard > .actions .input-group-prepend a + button, .input-group-prepend .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .btn + .ajax-file-upload, .input-group-prepend .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .fc button + .ajax-file-upload, .fc .input-group-prepend .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .input-group-prepend button + .ajax-file-upload, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .ajax-file-upload, .input-group-prepend .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions a + .ajax-file-upload, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .input-group-prepend a + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .btn + .swal2-styled, .input-group-prepend .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc button + .swal2-styled, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .input-group-prepend button + .swal2-styled, .input-group-prepend .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .swal2-styled, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .swal2-styled, .input-group-prepend .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions a + .swal2-styled, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .input-group-prepend a + .swal2-styled, .input-group-prepend .wizard > .actions .btn + a, .wizard > .actions .input-group-prepend .btn + a, .input-group-prepend .fc .wizard > .actions button + a, .wizard > .actions .input-group-prepend .fc button + a, .fc .input-group-prepend .wizard > .actions button + a, .wizard > .actions .fc .input-group-prepend button + a, .input-group-prepend .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + a, .input-group-prepend .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + a, .input-group-prepend .wizard > .actions a + a, .wizard > .actions .input-group-prepend a + a,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .fc button + .input-group-text, .fc
.input-group-prepend button + .input-group-text,
.input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .input-group-text, .ajax-upload-dragdrop
.input-group-prepend .ajax-file-upload + .input-group-text,
.input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text, .swal2-modal .swal2-buttonswrapper
.input-group-prepend .swal2-styled + .input-group-text,
.input-group-prepend .wizard > .actions a + .input-group-text, .wizard > .actions
.input-group-prepend a + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-prepend .fc .input-group-text + button, .fc
.input-group-prepend .input-group-text + button,
.input-group-prepend .ajax-upload-dragdrop .input-group-text + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-prepend .input-group-text + .ajax-file-upload,
.input-group-prepend .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-prepend .input-group-text + .swal2-styled,
.input-group-prepend .wizard > .actions .input-group-text + a, .wizard > .actions
.input-group-prepend .input-group-text + a,
.input-group-append .btn + .btn,
.input-group-append .fc button + .btn, .fc
.input-group-append button + .btn,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + .btn,
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + .btn,
.input-group-append .wizard > .actions a + .btn, .wizard > .actions
.input-group-append a + .btn,
.input-group-append .fc .btn + button, .fc
.input-group-append .btn + button,
.input-group-append .fc button + button, .fc
.input-group-append button + button,
.input-group-append .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop
.input-group-append .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + button,
.input-group-append .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper
.input-group-append .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + button,
.input-group-append .wizard > .actions .fc a + button, .fc
.input-group-append .wizard > .actions a + button, .wizard > .actions
.input-group-append .fc a + button, .fc .wizard > .actions
.input-group-append a + button,
.input-group-append .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .btn + .ajax-file-upload,
.input-group-append .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .fc button + .ajax-file-upload, .fc
.input-group-append .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc
.input-group-append button + .ajax-file-upload,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + .ajax-file-upload,
.input-group-append .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group-append .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + .ajax-file-upload,
.input-group-append .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .wizard > .actions a + .ajax-file-upload, .wizard > .actions
.input-group-append .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions
.input-group-append a + .ajax-file-upload,
.input-group-append .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .btn + .swal2-styled,
.input-group-append .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .fc button + .swal2-styled, .fc
.input-group-append .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc
.input-group-append button + .swal2-styled,
.input-group-append .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop
.input-group-append .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + .swal2-styled,
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + .swal2-styled,
.input-group-append .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .wizard > .actions a + .swal2-styled, .wizard > .actions
.input-group-append .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions
.input-group-append a + .swal2-styled,
.input-group-append .wizard > .actions .btn + a, .wizard > .actions
.input-group-append .btn + a,
.input-group-append .fc .wizard > .actions button + a, .wizard > .actions
.input-group-append .fc button + a, .fc
.input-group-append .wizard > .actions button + a, .wizard > .actions .fc
.input-group-append button + a,
.input-group-append .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop
.input-group-append .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + a,
.input-group-append .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper
.input-group-append .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + a,
.input-group-append .wizard > .actions a + a, .wizard > .actions
.input-group-append a + a,
.input-group-append .btn + .input-group-text,
.input-group-append .fc button + .input-group-text, .fc
.input-group-append button + .input-group-text,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .input-group-text, .ajax-upload-dragdrop
.input-group-append .ajax-file-upload + .input-group-text,
.input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text, .swal2-modal .swal2-buttonswrapper
.input-group-append .swal2-styled + .input-group-text,
.input-group-append .wizard > .actions a + .input-group-text, .wizard > .actions
.input-group-append a + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn,
.input-group-append .fc .input-group-text + button, .fc
.input-group-append .input-group-text + button,
.input-group-append .ajax-upload-dragdrop .input-group-text + .ajax-file-upload, .ajax-upload-dragdrop
.input-group-append .input-group-text + .ajax-file-upload,
.input-group-append .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled, .swal2-modal .swal2-buttonswrapper
.input-group-append .input-group-text + .swal2-styled,
.input-group-append .wizard > .actions .input-group-text + a, .wizard > .actions
.input-group-append .input-group-text + a {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.875rem 1.375rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.125rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group > .input-group-prepend > .btn, .asColorPicker-wrap > .input-group-prepend > .btn, .fc .input-group > .input-group-prepend > button, .fc .asColorPicker-wrap > .input-group-prepend > button, .ajax-upload-dragdrop .input-group > .input-group-prepend > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend > .swal2-styled, .wizard > .actions .input-group > .input-group-prepend > a, .wizard > .actions .asColorPicker-wrap > .input-group-prepend > a,
.input-group > .input-group-prepend > .input-group-text, .asColorPicker-wrap > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn, .asColorPicker-wrap > .input-group-append:not(:last-child) > .btn, .fc
.input-group > .input-group-append:not(:last-child) > button, .fc .asColorPicker-wrap > .input-group-append:not(:last-child) > button, .ajax-upload-dragdrop
.input-group > .input-group-append:not(:last-child) > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:not(:last-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group > .input-group-append:not(:last-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:not(:last-child) > .swal2-styled, .wizard > .actions
.input-group > .input-group-append:not(:last-child) > a, .wizard > .actions .asColorPicker-wrap > .input-group-append:not(:last-child) > a,
.input-group > .input-group-append:not(:last-child) > .input-group-text, .asColorPicker-wrap > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .asColorPicker-wrap > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .fc
.input-group > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle), .fc .asColorPicker-wrap > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop
.input-group > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper
.input-group > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions
.input-group > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle), .wizard > .actions .asColorPicker-wrap > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child), .asColorPicker-wrap > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn, .asColorPicker-wrap > .input-group-append > .btn, .fc .input-group > .input-group-append > button, .fc .asColorPicker-wrap > .input-group-append > button, .ajax-upload-dragdrop .input-group > .input-group-append > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-append > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append > .swal2-styled, .wizard > .actions .input-group > .input-group-append > a, .wizard > .actions .asColorPicker-wrap > .input-group-append > a,
.input-group > .input-group-append > .input-group-text, .asColorPicker-wrap > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn, .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .btn, .fc
.input-group > .input-group-prepend:not(:first-child) > button, .fc .asColorPicker-wrap > .input-group-prepend:not(:first-child) > button, .ajax-upload-dragdrop
.input-group > .input-group-prepend:not(:first-child) > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper
.input-group > .input-group-prepend:not(:first-child) > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .swal2-styled, .wizard > .actions
.input-group > .input-group-prepend:not(:first-child) > a, .wizard > .actions .asColorPicker-wrap > .input-group-prepend:not(:first-child) > a,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text, .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child), .asColorPicker-wrap > .input-group-prepend:first-child > .btn:not(:first-child), .fc
.input-group > .input-group-prepend:first-child > button:not(:first-child), .fc .asColorPicker-wrap > .input-group-prepend:first-child > button:not(:first-child), .ajax-upload-dragdrop
.input-group > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper
.input-group > .input-group-prepend:first-child > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:first-child > .swal2-styled:not(:first-child), .wizard > .actions
.input-group > .input-group-prepend:first-child > a:not(:first-child), .wizard > .actions .asColorPicker-wrap > .input-group-prepend:first-child > a:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child), .asColorPicker-wrap > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  user-select: none;
  background-color: #dee2e6;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #007bff;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(128, 189, 255, 0.5);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  opacity: 0;
}

.custom-select-sm {
  height: calc(1.8125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%;
}

.custom-select-lg {
  height: calc(2.875rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.25rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input:focus ~ .custom-file-label::after {
  border-color: #80bdff;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: 2.25rem;
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: 1px solid #ced4da;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  appearance: none;
}

.custom-range::-webkit-slider-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  appearance: none;
}

.custom-range::-moz-range-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  appearance: none;
}

.custom-range::-ms-thumb:focus {
  outline: none;
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
}

.nav-tabs {
  border-bottom: 1px solid #ebedf2;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #ebedf2 #ebedf2 #ebedf2;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #000;
  background-color: #ffffff;
  border-color: #ebedf2 #ebedf2 #ffffff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid #e7eaed;
  border-radius: 0;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid #e7eaed;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid #e7eaed;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
    width: 100% !important;
    border-top-left-radius: calc(0.25rem - 1px) !important;
    border-top-right-radius: calc(0.25rem - 1px) !important;
    border-radius: 0 !important;
    height: auto !important;
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: flex;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: flex;
    flex: 1 0 0%;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: flex;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-top,
  .card-group > .card:first-child .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:first-child .card-img-bottom,
  .card-group > .card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-top,
  .card-group > .card:last-child .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:last-child .card-img-bottom,
  .card-group > .card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:only-child {
    border-radius: 0;
  }
  .card-group > .card:only-child .card-img-top,
  .card-group > .card:only-child .card-header {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .card-group > .card:only-child .card-img-bottom,
  .card-group > .card:only-child .card-footer {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: transparent;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #495057;
}

.pagination, .jsgrid .jsgrid-pager {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover,
.jsgrid .jsgrid-pager .jsgrid-pager-page a:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
.jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-link:not(:disabled):not(.disabled), .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:not(:disabled):not(.disabled),
.jsgrid .jsgrid-pager .jsgrid-pager-page a:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link,
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .page-item:first-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:first-child a, .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link,
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .page-item:last-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:last-child a, .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link,
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-page a {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button .page-link,
.jsgrid .jsgrid-pager .disabled.jsgrid-pager-page .page-link, .page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.disabled a, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button a, .page-item.disabled
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.disabled a, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-page a {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg a, .pagination-lg
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child .page-link, .pagination-lg
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link,
.jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child .page-link, .pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:first-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child a, .pagination-lg .page-item:first-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:first-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child .page-link, .pagination-lg
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link,
.jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child .page-link, .pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:last-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child a, .pagination-lg .page-item:last-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:last-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm a, .pagination-sm
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child .page-link, .pagination-sm
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link,
.jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child .page-link, .pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:first-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child a, .pagination-sm .page-item:first-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:first-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child .page-link, .pagination-sm
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link,
.jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child .page-link, .pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:last-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child a, .pagination-sm .page-item:last-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:last-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}

.badge:empty {
  display: none;
}

.btn .badge, .fc button .badge, .ajax-upload-dragdrop .ajax-file-upload .badge, .swal2-modal .swal2-buttonswrapper .swal2-styled .badge, .wizard > .actions a .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #3c4876;
}

.badge-primary[href]:hover, .badge-primary[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #2b3354;
}

.badge-secondary {
  color: #212529;
  background-color: #dfe3e9;
}

.badge-secondary[href]:hover, .badge-secondary[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #c1c9d4;
}

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #fff;
  background-color: #71c016;
}

.badge-success[href]:hover, .preview-list .preview-item .preview-thumbnail [href].badge.badge-online:hover, .badge-success[href]:focus, .preview-list .preview-item .preview-thumbnail [href].badge.badge-online:focus {
  color: #fff;
  text-decoration: none;
  background-color: #569211;
}

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  color: #212529;
  background-color: #b3b4e8;
}

.badge-info[href]:hover, .preview-list .preview-item .preview-thumbnail [href].badge.badge-offline:hover, .badge-info[href]:focus, .preview-list .preview-item .preview-thumbnail [href].badge.badge-offline:focus {
  color: #212529;
  text-decoration: none;
  background-color: #8c8ddc;
}

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  color: #212529;
  background-color: #ffc100;
}

.badge-warning[href]:hover, .preview-list .preview-item .preview-thumbnail [href].badge.badge-busy:hover, .badge-warning[href]:focus, .preview-list .preview-item .preview-thumbnail [href].badge.badge-busy:focus {
  color: #212529;
  text-decoration: none;
  background-color: #cc9a00;
}

.badge-danger {
  color: #fff;
  background-color: #fc5661;
}

.badge-danger[href]:hover, .badge-danger[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: #fb2432;
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

.badge-light[href]:hover, .badge-light[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #dae0e5;
}

.badge-dark {
  color: #fff;
  background-color: #000000;
}

.badge-dark[href]:hover, .badge-dark[href]:focus {
  color: #fff;
  text-decoration: none;
  background-color: black;
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #1f253d;
  background-color: #d8dae4;
  border-color: #c8ccd9;
}

.alert-primary hr {
  border-top-color: #b9becf;
}

.alert-primary .alert-link {
  color: #0e101b;
}

.alert-secondary {
  color: #747679;
  background-color: #f9f9fb;
  border-color: #f6f7f9;
}

.alert-secondary hr {
  border-top-color: #e7e9ef;
}

.alert-secondary .alert-link {
  color: #5b5d5f;
}

.alert-success {
  color: #3b640b;
  background-color: #e3f2d0;
  border-color: #d7edbe;
}

.alert-success hr {
  border-top-color: #cbe7aa;
}

.alert-success .alert-link {
  color: #203606;
}

.alert-info {
  color: #5d5e79;
  background-color: #f0f0fa;
  border-color: #eaeaf9;
}

.alert-info hr {
  border-top-color: #d6d6f3;
}

.alert-info .alert-link {
  color: #47485c;
}

.alert-warning {
  color: #856400;
  background-color: #fff3cc;
  border-color: #ffeeb8;
}

.alert-warning hr {
  border-top-color: #ffe89f;
}

.alert-warning .alert-link {
  color: #523e00;
}

.alert-danger {
  color: #832d32;
  background-color: #fedddf;
  border-color: #fed0d3;
}

.alert-danger hr {
  border-top-color: #fdb7bc;
}

.alert-danger .alert-link {
  color: #5d2024;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: black;
  background-color: #cccccc;
  border-color: #b8b8b8;
}

.alert-dark hr {
  border-top-color: #ababab;
}

.alert-dark .alert-link {
  color: black;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite;
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item:hover, .list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}

.list-group-item-primary {
  color: #1f253d;
  background-color: #c8ccd9;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #1f253d;
  background-color: #b9becf;
}

.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #1f253d;
  border-color: #1f253d;
}

.list-group-item-secondary {
  color: #747679;
  background-color: #f6f7f9;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #747679;
  background-color: #e7e9ef;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #747679;
  border-color: #747679;
}

.list-group-item-success {
  color: #3b640b;
  background-color: #d7edbe;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #3b640b;
  background-color: #cbe7aa;
}

.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #3b640b;
  border-color: #3b640b;
}

.list-group-item-info {
  color: #5d5e79;
  background-color: #eaeaf9;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #5d5e79;
  background-color: #d6d6f3;
}

.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #5d5e79;
  border-color: #5d5e79;
}

.list-group-item-warning {
  color: #856400;
  background-color: #ffeeb8;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856400;
  background-color: #ffe89f;
}

.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #856400;
  border-color: #856400;
}

.list-group-item-danger {
  color: #832d32;
  background-color: #fed0d3;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #832d32;
  background-color: #fdb7bc;
}

.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #832d32;
  border-color: #832d32;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: black;
  background-color: #b8b8b8;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: black;
  background-color: #ababab;
}

.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: black;
  border-color: black;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  opacity: .5;
}

.close:hover, .close:focus {
  color: #fff;
  text-decoration: none;
  opacity: .75;
}

.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}

.modal-open {
  overflow: hidden;
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.625rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.4s ease;
  transform: translate(0, -25%);
}

@media screen and (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - (0.625rem * 2));
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #38647a;
  border-radius: 0;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9e8ef;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 0.937rem;
}

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 0.937rem;
  border-top: 1px solid #e9e8ef;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 800px;
    margin: 1.875rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.875rem * 2));
  }
  .modal-sm {
    max-width: 400px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 90%;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.5rem 0;
}

.bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top .arrow::after, .bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.5rem 0.5rem 0.5rem 0;
}

.bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right .arrow::after, .bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.5rem 0.5rem 0.5rem;
}

.bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom .arrow::after, .bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.5rem 0 0.5rem 0.5rem;
}

.bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left .arrow::after, .bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-item {
  position: relative;
  display: none;
  align-items: center;
  width: 100%;
  transition: transform 0.6s ease;
  backface-visibility: hidden;
  perspective: 1000px;
}

@media screen and (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  transform: translateX(0);
}

@supports (transform-style: preserve-3d) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    transform: translate3d(0, 0, 0);
  }
}

.carousel-item-next,
.active.carousel-item-right {
  transform: translateX(100%);
}

@supports (transform-style: preserve-3d) {
  .carousel-item-next,
  .active.carousel-item-right {
    transform: translate3d(100%, 0, 0);
  }
}

.carousel-item-prev,
.active.carousel-item-left {
  transform: translateX(-100%);
}

@supports (transform-style: preserve-3d) {
  .carousel-item-prev,
  .active.carousel-item-left {
    transform: translate3d(-100%, 0, 0);
  }
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-duration: .6s;
  transition-property: opacity;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  transform: translateX(0);
}

@supports (transform-style: preserve-3d) {
  .carousel-fade .carousel-item-next,
  .carousel-fade .carousel-item-prev,
  .carousel-fade .carousel-item.active,
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-prev {
    transform: translate3d(0, 0, 0);
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: .9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  position: relative;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators .active {
  background-color: #fff;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary, .settings-panel .color-tiles .tiles.primary {
  background-color: #3c4876 !important;
}

a.bg-primary:hover, .settings-panel .color-tiles a.tiles.primary:hover, a.bg-primary:focus, .settings-panel .color-tiles a.tiles.primary:focus,
button.bg-primary:hover,
.settings-panel .color-tiles button.tiles.primary:hover,
button.bg-primary:focus,
.settings-panel .color-tiles button.tiles.primary:focus {
  background-color: #2b3354 !important;
}

.bg-secondary {
  background-color: #dfe3e9 !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #c1c9d4 !important;
}

.bg-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  background-color: #71c016 !important;
}

a.bg-success:hover, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:hover, a.bg-success:focus, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:focus,
button.bg-success:hover,
.swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:hover,
button.bg-success:focus,
.swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:focus {
  background-color: #569211 !important;
}

.bg-info, .settings-panel .color-tiles .tiles.info {
  background-color: #b3b4e8 !important;
}

a.bg-info:hover, .settings-panel .color-tiles a.tiles.info:hover, a.bg-info:focus, .settings-panel .color-tiles a.tiles.info:focus,
button.bg-info:hover,
.settings-panel .color-tiles button.tiles.info:hover,
button.bg-info:focus,
.settings-panel .color-tiles button.tiles.info:focus {
  background-color: #8c8ddc !important;
}

.bg-warning {
  background-color: #ffc100 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #cc9a00 !important;
}

.bg-danger {
  background-color: #fc5661 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #fb2432 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark, .settings-panel .color-tiles .tiles.dark {
  background-color: #000000 !important;
}

a.bg-dark:hover, .settings-panel .color-tiles a.tiles.dark:hover, a.bg-dark:focus, .settings-panel .color-tiles a.tiles.dark:focus,
button.bg-dark:hover,
.settings-panel .color-tiles button.tiles.dark:hover,
button.bg-dark:focus,
.settings-panel .color-tiles button.tiles.dark:focus {
  background-color: black !important;
}

.bg-white {
  background-color: #ffffff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border, .loader-demo-box {
  border: 1px solid #e9e8ef !important;
}

.border-top {
  border-top: 1px solid #e9e8ef !important;
}

.border-right {
  border-right: 1px solid #e9e8ef !important;
}

.border-bottom {
  border-bottom: 1px solid #e9e8ef !important;
}

.border-left {
  border-left: 1px solid #e9e8ef !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #3c4876 !important;
}

.border-secondary, .loader-demo-box {
  border-color: #dfe3e9 !important;
}

.border-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  border-color: #71c016 !important;
}

.border-info {
  border-color: #b3b4e8 !important;
}

.border-warning {
  border-color: #ffc100 !important;
}

.border-danger {
  border-color: #fc5661 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #000000 !important;
}

.border-white {
  border-color: #ffffff !important;
}

.rounded, .loader-demo-box {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-circle, .settings-panel .color-tiles .tiles {
  border-radius: 50% !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex, .loader-demo-box, .list-wrapper ul li, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user, .email-wrapper .mail-list-container .mail-list .details, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .lightGallery .image-tile .demo-gallery-poster, .swal2-modal, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  display: flex !important;
}

.d-inline-flex, .email-wrapper .message-body .attachments-sections ul li {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row, .email-wrapper .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav {
  flex-direction: row !important;
}

.flex-column, .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom, .nav-pills.nav-pills-vertical, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.justify-content-start, .list-wrapper ul li {
  justify-content: flex-start !important;
}

.justify-content-end, .email-wrapper .mail-list-container .mail-list .details {
  justify-content: flex-end !important;
}

.justify-content-center, .email-wrapper .message-body .attachments-sections ul li .thumb {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center, .loader-demo-box, .list-wrapper ul li, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch, .email-wrapper .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0, .demo-modal .modal-dialog,
.my-0 {
  margin-top: 0 !important;
}

.mr-0, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles, .rtl .settings-panel .events i,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i, .rtl .list-wrapper .remove,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2, .btn-toolbar .btn-group + .btn-group, .btn-toolbar .fc .fc-button-group + .btn-group, .fc .btn-toolbar .fc-button-group + .btn-group, .btn-toolbar .fc .btn-group + .fc-button-group, .fc .btn-toolbar .btn-group + .fc-button-group, .btn-toolbar .fc .fc-button-group + .fc-button-group, .fc .btn-toolbar .fc-button-group + .fc-button-group, .rtl .settings-panel .events i,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3, .template-demo > .btn-toolbar,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3, .template-demo .circle-progress-block,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2,
.template-demo .circle-progress-block {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2,
.template-demo .circle-progress-block {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto, .rtl .list-wrapper .remove,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto, .list-wrapper .remove,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.text-justify {
  text-align: justify !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #ffffff !important;
}

.text-primary, .list-wrapper .completed .remove {
  color: #3c4876 !important;
}

a.text-primary:hover, .list-wrapper .completed a.remove:hover, a.text-primary:focus, .list-wrapper .completed a.remove:focus {
  color: #2b3354 !important;
}

.text-secondary, .list-wrapper .remove {
  color: #dfe3e9 !important;
}

a.text-secondary:hover, .list-wrapper a.remove:hover, a.text-secondary:focus, .list-wrapper a.remove:focus {
  color: #c1c9d4 !important;
}

.text-success {
  color: #71c016 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #569211 !important;
}

.text-info {
  color: #b3b4e8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #8c8ddc !important;
}

.text-warning {
  color: #ffc100 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #cc9a00 !important;
}

.text-danger {
  color: #fc5661 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #fb2432 !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important;
}

.text-dark {
  color: #000000 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: black !important;
}

.text-body {
  color: #000 !important;
}

.degree, .text-muted, .preview-list .preview-item .preview-item-content p .content-category, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .message_text, .email-wrapper .mail-list-container .mail-list .details .date {
  color: #9b9b9b !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn):not(.fc button):not(.ajax-upload-dragdrop .ajax-file-upload):not(.swal2-modal .swal2-buttonswrapper .swal2-styled):not(.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm):not(.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel):not(.wizard > .actions a) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table, .jsgrid .jsgrid-table {
    border-collapse: collapse !important;
  }
  .table td, .jsgrid .jsgrid-table td,
  .table th, .jsgrid .jsgrid-table th {
    background-color: #ffffff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #e9e8ef;
  }
  .table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
    color: inherit;
    border-color: #e9e8ef;
  }
}

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

/* Animation Mixins */
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    transform: translate3d(0, 30px, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0, 0px, 0);
  }
}

.dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  -moz-animation-duration: 0.25s;
  -ms-animation-duration: 0.25s;
  -o-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.fadeOut {
  animation-name: fadeOut;
}

.infinite-spin, #settings-trigger i {
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp, #settings-trigger {
  animation-name: fadeInUp;
}

@keyframes sidemenuAnimation {
  from {
    opacity: 0;
    transform: translate3d(30px, 0, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0px, 0, 0);
  }
}

.sidemenuAnimation, .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing, .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
  animation-name: sidemenuAnimation;
  -webkit-animation-duration: 0.25s;
  -moz-animation-duration: 0.25s;
  -ms-animation-duration: 0.25s;
  -o-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  outline: 0;
}

a,
div,
h1,
h2,
h3,
h4,
h5,
p,
span {
  text-shadow: none;
}

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0;
}

input,
.form-control:focus,
.asColorPicker-input:focus,
.dataTables_wrapper select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus,
.select2-container--default .select2-selection--single:focus,
.select2-container--default .select2-selection--single .select2-search__field:focus,
.typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  box-shadow: none;
  outline-style: none;
}

textarea {
  resize: none;
  overflow-x: hidden;
}

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a,
.btn-group.open .dropdown-toggle, .fc .open.fc-button-group .dropdown-toggle,
.btn:active,
.fc button:active,
.ajax-upload-dragdrop .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active,
.wizard > .actions a:active,
.btn:focus,
.fc button:focus,
.ajax-upload-dragdrop .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
.wizard > .actions a:focus,
.btn:hover,
.fc button:hover,
.ajax-upload-dragdrop .ajax-file-upload:hover,
.swal2-modal .swal2-buttonswrapper .swal2-styled:hover,
.wizard > .actions a:hover,
.btn:visited,
.fc button:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
.swal2-modal .swal2-buttonswrapper .swal2-styled:visited,
.wizard > .actions a:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.btn.active.focus, .fc button.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .active.focus.swal2-styled, .wizard > .actions a.active.focus,
.btn.active:focus,
.fc button.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .active.swal2-styled:focus,
.wizard > .actions a.active:focus,
.btn.focus,
.fc button.focus,
.ajax-upload-dragdrop .focus.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .focus.swal2-styled,
.wizard > .actions a.focus,
.btn:active.focus,
.fc button:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active.focus,
.wizard > .actions a:active.focus,
.btn:active:focus,
.fc button:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active:focus,
.wizard > .actions a:active:focus,
.btn:focus,
.fc button:focus,
.ajax-upload-dragdrop .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
.wizard > .actions a:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0;
}

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0;
}

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0;
}

a:focus,
input:focus {
  border-color: transparent;
  outline: none;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-Regular.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-Regulard41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-Regular.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-Regular.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-Regular.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-Bold.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-Boldd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-Bold.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-Bold.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-Bold.ttf") format("truetype");
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraBold.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraBoldd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-ExtraBold.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-ExtraBold.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-ExtraBold.ttf") format("truetype");
  font-weight: 800;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-SemiBold.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-SemiBoldd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-SemiBold.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-SemiBold.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-SemiBold.ttf") format("truetype");
  font-weight: 600;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraBoldItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraBoldItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-ExtraBoldItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-ExtraBoldItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-ExtraBoldItalic.ttf") format("truetype");
  font-weight: 800;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraLight.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraLightd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-ExtraLight.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-ExtraLight.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-ExtraLight.ttf") format("truetype");
  font-weight: 200;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-BlackItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-BlackItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-BlackItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-BlackItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-BlackItalic.ttf") format("truetype");
  font-weight: 900;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-Light.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-Lightd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-Light.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-Light.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-Light.ttf") format("truetype");
  font-weight: 300;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-SemiBoldItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-SemiBoldItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-SemiBoldItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-SemiBoldItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-SemiBoldItalic.ttf") format("truetype");
  font-weight: 600;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-BoldItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-BoldItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-BoldItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-BoldItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-BoldItalic.ttf") format("truetype");
  font-weight: bold;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-LightItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-LightItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-LightItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-LightItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-LightItalic.ttf") format("truetype");
  font-weight: 300;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-Black.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-Blackd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-Black.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-Black.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-Black.ttf") format("truetype");
  font-weight: 900;
  font-style: normal;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraLightItalic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-ExtraLightItalicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-ExtraLightItalic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-ExtraLightItalic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-ExtraLightItalic.ttf") format("truetype");
  font-weight: 200;
  font-style: italic;
}

@font-face {
  font-family: 'NunitoSans';
  src: url("../../fonts/NunitoSans/NunitoSans-Italic.eot");
  src: url("../../fonts/NunitoSans/NunitoSans-Italicd41d.eot?#iefix") format("embedded-opentype"), url("../../fonts/NunitoSans/NunitoSans-Italic.woff2") format("woff2"), url("../../fonts/NunitoSans/NunitoSans-Italic.woff") format("woff"), url("../../fonts/NunitoSans/NunitoSans-Italic.ttf") format("truetype");
  font-weight: normal;
  font-style: italic;
}

.bg-twitter {
  background: #2caae1;
}

.bg-facebook {
  background: #3b579d;
}

.bg-google {
  background: #dc4a38;
}

.bg-linkedin {
  background: #0177b5;
}

.bg-pinterest {
  background: #cc2127;
}

.bg-youtube {
  background: #e52d27;
}

.bg-github {
  background: #333333;
}

.bg-behance {
  background: #1769ff;
}

.bg-dribbble {
  background: #ea4c89;
}

.bg-reddit {
  background: #ff4500;
}

.bg-hangouts {
  background: #56b83b;
}

.bg-gradient-primary {
  background: linear-gradient(230deg, #759bff, #843cf6);
}

.bg-gradient-secondary {
  background: linear-gradient(to right, #e7ebf0, #868e96);
}

.bg-gradient-success {
  background: linear-gradient(45deg, #7bffce, #30c93e);
}

.bg-gradient-info {
  background: linear-gradient(to bottom, #0e4cfd, #6a8eff);
}

.bg-gradient-warning {
  background: linear-gradient(135deg, #ffc480, #ff763b);
}

.bg-gradient-danger {
  background: linear-gradient(316deg, #fc5286, #fbaaa2);
}

.bg-gradient-light {
  background: linear-gradient(to right, #cfd9df 0%, #e2ebf0 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to right, #7d7979 0%, #000000 100%);
}

/* Typography */
body {
  font-size: 1rem;
  font-family: 'Fira Sans', sans-serif;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  line-height: 1;
}

p {
  font-size: 0.875rem;
  margin-bottom: .5rem;
}

h1,
.h1 {
  font-size: 2.5rem;
  font-weight: 300;
}

h2,
.h2 {
  font-size: 1.875rem;
  font-weight: 400;
}

h3,
.h3 {
  font-size: 1.5rem;
  font-weight: 400;
}

h4,
.h4 {
  font-size: 1.125rem;
  font-weight: bold;
}

h5,
.h5 {
  font-size: 1.125rem;
  font-weight: 600;
}

h6,
.h6 {
  font-size: 1rem;
  font-weight: 600;
}

.display-1 {
  font-size: 3.75rem;
}

@media (max-width: 991px) {
  .display-1 {
    font-size: 3rem;
  }
}

.display-2 {
  font-size: 3.125rem;
}

@media (max-width: 991px) {
  .display-2 {
    font-size: 2.5rem;
  }
}

.display-3 {
  font-size: 2.5rem;
}

@media (max-width: 991px) {
  .display-3 {
    font-size: 2rem;
  }
}

.display-4 {
  font-size: 1.875rem;
}

@media (max-width: 991px) {
  .display-4 {
    font-size: 1.5rem;
  }
}

.display-5 {
  font-size: 1.25rem;
}

@media (max-width: 991px) {
  .display-5 {
    font-size: 1rem;
  }
}

.blockquote {
  padding: 1.25rem;
  border: 1px solid #e9e8ef;
}

address p {
  margin-bottom: 0;
}

.blockquote-primary {
  border-color: #3c4876;
}

.blockquote-primary .blockquote-footer {
  color: #3c4876;
}

.blockquote-secondary {
  border-color: #dfe3e9;
}

.blockquote-secondary .blockquote-footer {
  color: #dfe3e9;
}

.blockquote-success {
  border-color: #71c016;
}

.blockquote-success .blockquote-footer {
  color: #71c016;
}

.blockquote-info {
  border-color: #b3b4e8;
}

.blockquote-info .blockquote-footer {
  color: #b3b4e8;
}

.blockquote-warning {
  border-color: #ffc100;
}

.blockquote-warning .blockquote-footer {
  color: #ffc100;
}

.blockquote-danger {
  border-color: #fc5661;
}

.blockquote-danger .blockquote-footer {
  color: #fc5661;
}

.blockquote-light {
  border-color: #f8f9fa;
}

.blockquote-light .blockquote-footer {
  color: #f8f9fa;
}

.blockquote-dark {
  border-color: #000000;
}

.blockquote-dark .blockquote-footer {
  color: #000000;
}

.error-page h1 {
  font-size: 12rem;
}

@media (max-width: 991px) {
  .error-page h1 {
    font-size: 8rem;
  }
}

.text-twitter {
  color: #2caae1;
}

.text-facebook {
  color: #3b579d;
}

.text-google {
  color: #dc4a38;
}

.text-linkedin {
  color: #0177b5;
}

.text-pinterest {
  color: #cc2127;
}

.text-youtube {
  color: #e52d27;
}

.text-github {
  color: #333333;
}

.text-behance {
  color: #1769ff;
}

.text-dribbble {
  color: #ea4c89;
}

.text-reddit {
  color: #ff4500;
}

.text-hangouts {
  color: #56b83b;
}

.page-header {
  margin-bottom: 2.5rem;
}

.page-header .page-title {
  margin-bottom: 0;
  line-height: .85;
}

/* Miscellanoeous */
body,
html {
  padding-right: 0 !important;
}

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto;
}

.container-scroller {
  overflow: hidden;
}

pre {
  background: #e8eff4;
  padding: 15px;
  font-size: 14px;
}

code {
  padding: 5px;
  color: #fc5661;
  font-family: 'Fira Sans', sans-serif;
  font-weight: 300;
  font-size: 0.875rem;
  border-radius: 4px;
}

.page-title {
  margin: 1rem 0;
  color: #3c4876;
}

/* Footer */
.footer {
  background: #F7F7FA;
  padding: 2.187rem 1.6rem;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: calc(0.875rem - 0.05rem);
  font-family: 'Fira Sans', sans-serif;
  font-weight: 400;
}

.footer a {
  color: #3c4876;
  font-size: inherit;
}

@media (max-width: 991px) {
  .footer {
    margin-left: 0;
    width: 100%;
  }
}

/* Utilities */
.grid-margin {
  margin-bottom: 1.875rem;
}

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0;
  }
}

.img-lg {
  width: 92px;
  height: 92px;
}

.img-sm {
  width: 43px;
  height: 43px;
}

.img-xs {
  width: 37px;
  height: 37px;
}

.img-ss, .settings-panel .color-tiles .tiles {
  width: 26px;
  height: 26px;
}

.stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #e9e8ef;
  }
}

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #e9e8ef;
  }
}

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #e9e8ef;
  }
}

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #e9e8ef;
  }
}

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #e9e8ef;
  }
}

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #e9e8ef;
  }
}

.text-gray, .card .card-subtitle {
  color: #8c8c8c;
}

.text-black {
  color: #000;
}

.text-small {
  font-size: 12px;
}

.flex-grow {
  flex-grow: 1;
}

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px;
}

.template-demo .progress {
  margin-top: 1.5rem;
}

.template-demo > h2,
.template-demo > h3,
.template-demo > h4,
.template-demo > h5,
.template-demo > h6,
.template-demo > h1 {
  border-top: 1px solid #e9e8ef;
  padding: 0.5rem 0 0;
}

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem;
}

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem;
}

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem;
}

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem;
}

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0;
}

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #e9e8ef;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem;
}

.template-demo .circle-progress {
  padding: 15px;
}

.demo-modal {
  position: static;
  display: block;
}

.demo-modal .modal-dialog.modal-lg {
  max-width: 100%;
}

.loader-demo-box {
  width: 100%;
  height: 200px;
}

.dropdown-menu-static-demo {
  height: 19.375rem;
  margin-bottom: 20px;
}

.dropdown-menu-static-demo .dropdown-menu {
  z-index: 0;
}

.rounded-legend ul li {
  list-style-type: none;
  color: #9b9b9b;
  font-size: .75rem;
}

.rounded-legend ul li .legend-dots {
  width: 1rem;
  height: 1rem;
  border-radius: 100%;
  display: inline-block;
  vertical-align: text-bottom;
  margin-right: .5rem;
}

.rtl .rounded-legend ul li .legend-dots {
  margin-left: .5rem;
}

.rounded-legend.legend-horizontal {
  display: -webkit-flex;
  display: flex;
}

.rounded-legend.legend-horizontal ul li {
  display: inline-block;
  margin-right: 1.5rem;
}

.rtl .rounded-legend.legend-horizontal ul li {
  margin-right: auto;
  margin-left: 1.5rem;
}

.rounded-legend.legend-top-right ul {
  float: right;
}

.rtl .rounded-legend.legend-top-right ul {
  float: left;
}

.rounded-legend.legend-vertical ul li {
  margin-top: 1rem;
}

.demo-chart {
  height: 300px;
}

@media (max-width: 767px) {
  .demo-chart {
    height: 200px;
  }
}

.chartjs-legend ul {
  margin-bottom: 0;
  list-style: none;
  padding-left: 0;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-justify-content: start;
  justify-content: start;
}

.chartjs-legend ul li {
  margin-right: 8%;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}

.chartjs-legend ul li span {
  height: 0.625rem;
  width: 0.625rem;
  border: 1px solid #44519e;
  margin-right: .4rem;
  display: inline-block;
  font-size: 0.875rem;
  border-radius: 100%;
}

.rtl .chartjs-legend ul {
  padding-right: 0;
}

.rtl .chartjs-legend ul li {
  margin-right: 0;
  margin-left: 8%;
}

.rtl .chartjs-legend ul li span {
  margin-right: 0;
  margin-left: 1rem;
}

.chartjs-legend.analytics-legend ul {
  padding-left: 0;
}

.documentation {
  padding-top: 0;
  max-width: 100%;
}

.documentation .content-wrapper {
  padding-top: 0;
  min-height: calc(100vh - 75px);
}

.doc-table-contents,
.doc-header {
  position: fixed;
}

.doc-header {
  padding-top: 24px;
  padding-bottom: 24px;
  z-index: 2;
  background: #F7F7FA;
}

.doc-content {
  padding-top: 157px;
}

.doc-table-contents {
  overflow: auto;
  max-height: calc(100% - 157px);
}

.doc-table-contents ul li {
  margin-top: 10px;
}

.doc-credits ul li {
  margin-bottom: 10px;
}

.doc-credits ul li a {
  margin-left: .25rem;
}

.demo-vector-map {
  width: 100%;
  height: 500px;
}

.sparkline-demo-chart canvas {
  max-width: 100%;
}

/*-------------------------------------------------------------------*/
/* === Components === */
/* Accordions */
.accordion .card {
  margin-bottom: .75rem;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: .25rem;
}

.accordion .card .card-header {
  background-color: transparent;
  border: none;
  padding: 2rem;
}

.accordion .card .card-header * {
  font-weight: 400;
  font-size: 1rem;
}

.accordion .card .card-header a {
  display: block;
  color: inherit;
  text-decoration: none;
  font-size: inherit;
  position: relative;
  -webkit-transition: color 0.5s ease;
  -moz-transition: color 0.5s ease;
  -ms-transition: color 0.5s ease;
  -o-transition: color 0.5s ease;
  transition: color 0.5s ease;
  padding-right: .5rem;
}

.accordion .card .card-header a:before {
  font-family: "Material Design Icons";
  position: absolute;
  right: 7px;
  top: 0;
  font-size: 18px;
  display: block;
}

.accordion .card .card-header a[aria-expanded="true"] {
  color: #3c4876;
}

.accordion .card .card-header a[aria-expanded="true"]:before {
  content: "\F374";
}

.accordion .card .card-header a[aria-expanded="false"]:before {
  content: "\F415";
}

.accordion .card .card-body {
  font-size: 14px;
  padding: 0 2rem 2rem 2rem;
  font-weight: 400;
  line-height: 1.5;
}

.accordion .card .card-body i {
  font-size: inherit;
}
.accordion.accordion-bordered {
  background: #ffffff;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
}

.accordion.accordion-bordered .card {
  margin: 0 2rem;
  border: 0;
  border-top: 1px solid #e9e8ef;
  box-shadow: none;
  border-radius: 0;
}

.accordion.accordion-bordered .card .card-header,
.accordion.accordion-bordered .card .card-body {
  padding-left: 0;
  padding-right: 0;
}

.accordion.accordion-bordered .card .card-header a:before {
  color: #fc5661;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"]:before {
  content: "\F062";
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="false"]:before {
  content: "\F04A";
}

.accordion.accordion-bordered .card:first-child {
  border-top: 0;
}

.accordion.accordion-filled .card {
  padding: 0;
}

.accordion.accordion-filled .card .card-header {
  padding: 0;
}

.accordion.accordion-filled .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-filled .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"] {
  background: #b3b4e8;
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"]:before {
  content: "\F143";
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="false"]:before {
  content: "\F140";
}

.accordion.accordion-filled .card .card-body {
  padding: 0 2rem 2rem 2rem;
  background: #b3b4e8;
  color: #ffffff;
}

.accordion.accordion-solid-header .card {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-header .card .card-header a:before {
  top: 34%;
  right: 15px;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"] {
  background: #3c4876;
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"]:before {
  content: "\F143";
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="false"]:before {
  content: "\F140";
}

.accordion.accordion-solid-header .card .card-body {
  padding: 2rem;
}

.accordion.accordion-solid-content .card {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-content .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"]:before {
  content: "\F143";
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="false"]:before {
  content: "\F140";
}

.accordion.accordion-solid-content .card .card-body {
  padding: 2rem;
  background: #71c016;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card .card-header,
.accordion.accordion-multi-colored .card .card-body {
  background: transparent;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card:nth-child(1) {
  background: #3c4876;
}

.accordion.accordion-multi-colored .card:nth-child(2) {
  background: #71c016;
}

.accordion.accordion-multi-colored .card:nth-child(3) {
  background: #fc5661;
}

.accordion.accordion-multi-colored .card:nth-child(4) {
  background: #ffc100;
}

.accordion.accordion-multi-colored .card:nth-child(5) {
  background: #b3b4e8;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"]:before {
  content: "\F143";
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="false"]:before {
  content: "\F140";
}

/* Badges */
.badge {
  border-radius: 0;
  font-size: 12px;
  line-height: 1;
  padding: .375rem .5625rem;
  font-weight: normal;
}

.badge.badge-pill {
  border-radius: 10rem;
}

/*Badge outlined variations*/
.badge-outline-primary {
  color: #3c4876;
  border: 1px solid #3c4876;
}

.badge-outline-secondary {
  color: #dfe3e9;
  border: 1px solid #dfe3e9;
}

.badge-outline-success {
  color: #71c016;
  border: 1px solid #71c016;
}

.badge-outline-info {
  color: #b3b4e8;
  border: 1px solid #b3b4e8;
}

.badge-outline-warning {
  color: #ffc100;
  border: 1px solid #ffc100;
}

.badge-outline-danger {
  color: #fc5661;
  border: 1px solid #fc5661;
}

.badge-outline-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa;
}

.badge-outline-dark {
  color: #000000;
  border: 1px solid #000000;
}

/* Bootstrap Alerts */
.alert {
  font-size: 0.875rem;
}

.alert i {
  font-size: 1.25rem;
  margin-right: 1.25rem;
  vertical-align: middle;
  line-height: .5;
}

.alert-primary {
  color: #2e375a;
  background-color: rgba(60, 72, 118, 0.2);
  border-color: #37426d;
}

.alert-primary hr {
  border-top-color: #2e385c;
}

.alert-primary .alert-link {
  color: #1d2238;
}

.alert-secondary {
  color: #a9adb1;
  background-color: rgba(223, 227, 233, 0.2);
  border-color: #cdd1d6;
}

.alert-secondary hr {
  border-top-color: #bfc4cb;
}

.alert-secondary .alert-link {
  color: #8e9499;
}

.alert-success {
  color: #569211;
  background-color: rgba(113, 192, 22, 0.2);
  border-color: #68b114;
}

.alert-success hr {
  border-top-color: #5b9a11;
}

.alert-success .alert-link {
  color: #3b640c;
}

.alert-info {
  color: #8889b0;
  background-color: rgba(179, 180, 232, 0.2);
  border-color: #a5a6d5;
}

.alert-info hr {
  border-top-color: #9495cd;
}

.alert-info .alert-link {
  color: #696b9c;
}

.alert-warning {
  color: #c29300;
  background-color: rgba(255, 193, 0, 0.2);
  border-color: #ebb200;
}

.alert-warning hr {
  border-top-color: #d29f00;
}

.alert-warning .alert-link {
  color: #8f6c00;
}

.alert-danger {
  color: #c0414a;
  background-color: rgba(252, 86, 97, 0.2);
  border-color: #e84f59;
}

.alert-danger hr {
  border-top-color: #e53844;
}

.alert-danger .alert-link {
  color: #9b333b;
}

.alert-light {
  color: #bcbdbe;
  background-color: rgba(248, 249, 250, 0.2);
  border-color: #e4e5e6;
}

.alert-light hr {
  border-top-color: #d7d8da;
}

.alert-light .alert-link {
  color: #a2a4a5;
}

.alert-dark {
  color: black;
  background-color: rgba(0, 0, 0, 0.2);
  border-color: black;
}

.alert-dark hr {
  border-top-color: black;
}

.alert-dark .alert-link {
  color: black;
}

.alert-fill-primary {
  color: #ffffff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.alert-fill-primary hr {
  border-top-color: #333e65;
}

.alert-fill-primary .alert-link {
  color: #e6e6e6;
}

.alert-fill-secondary {
  color: #ffffff;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.alert-fill-secondary hr {
  border-top-color: #d0d6df;
}

.alert-fill-secondary .alert-link {
  color: #e6e6e6;
}

.alert-fill-success {
  color: #ffffff;
  background-color: #71c016;
  border-color: #71c016;
}

.alert-fill-success hr {
  border-top-color: #64a913;
}

.alert-fill-success .alert-link {
  color: #e6e6e6;
}

.alert-fill-info {
  color: #ffffff;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.alert-fill-info hr {
  border-top-color: #9fa1e2;
}

.alert-fill-info .alert-link {
  color: #e6e6e6;
}

.alert-fill-warning {
  color: #ffffff;
  background-color: #ffc100;
  border-color: #ffc100;
}

.alert-fill-warning hr {
  border-top-color: #e6ae00;
}

.alert-fill-warning .alert-link {
  color: #e6e6e6;
}

.alert-fill-danger {
  color: #ffffff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.alert-fill-danger hr {
  border-top-color: #fc3d4a;
}

.alert-fill-danger .alert-link {
  color: #e6e6e6;
}

.alert-fill-light {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.alert-fill-light hr {
  border-top-color: #e9ecef;
}

.alert-fill-light .alert-link {
  color: #e6e6e6;
}

.alert-fill-dark {
  color: #ffffff;
  background-color: #000000;
  border-color: #000000;
}

.alert-fill-dark hr {
  border-top-color: black;
}

.alert-fill-dark .alert-link {
  color: #e6e6e6;
}

/* Bootstrap Progress */
.progress {
  border-radius: 3px;
  height: 8px;
}

.progress .progress-bar {
  border-radius: 3px;
}

.progress.progress-sm {
  height: 0.375rem;
}

.progress.progress-md {
  height: 8px;
}

.progress.progress-lg {
  height: 15px;
}

.progress.progress-xl {
  height: 18px;
}

/* Buttons */
.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  font-size: 1.1rem;
  line-height: 1;
  font-weight: 400;
  /* Buttons with only icons */
  /* Buttons with icon and text */
}

.btn i, .fc button i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i, .wizard > .actions a i {
  font-size: 1rem;
}

.btn.btn-rounded, .fc button.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-rounded.swal2-styled, .wizard > .actions a.btn-rounded {
  border-radius: 50px;
}

.btn.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .ajax-upload-dragdrop .fc button.ajax-file-upload, .fc .ajax-upload-dragdrop button.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc button.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper button.swal2-styled, .wizard > .actions a.btn-sm {
  font-size: 0.875rem;
}

.btn.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a, .fc button.btn-lg, .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled, .wizard > .actions a.btn-lg {
  font-size: 0.875rem;
}

.btn.btn-xs, .fc button.btn-xs, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-submit, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-cancel, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .swal2-modal .swal2-buttonswrapper .btn-xs.swal2-styled, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-submit, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-submit, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-cancel, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-cancel, .wizard > .actions a.btn-xs {
  padding: 0.5rem 0.75rem;
  font-size: 0.625rem;
}

.btn.btn-icon, .fc button.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icon.swal2-styled, .wizard > .actions a.btn-icon {
  width: 1.875rem;
  height: 1.875rem;
  padding: 0;
}

.btn.btn-icon-text .btn-icon-prepend, .fc button.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend {
  margin-right: .5rem;
}

.btn.btn-icon-text .btn-icon-append, .fc button.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-append, .wizard > .actions a.btn-icon-text .btn-icon-append {
  margin-left: .5rem;
}

.btn.btn-social-icon, .fc button.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-social-icon.swal2-styled, .wizard > .actions a.btn-social-icon {
  width: 50px;
  height: 50px;
  padding: 0;
}

.btn:not(:disabled):not(.disabled):active:focus, .fc button:not(:disabled):not(.disabled):active:focus, .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled):active:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled):active:focus, .wizard > .actions a:not(:disabled):not(.disabled):active:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.btn:not(:disabled):not(.disabled):focus, .fc button:not(:disabled):not(.disabled):focus, .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled):focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled):focus, .wizard > .actions a:not(:disabled):not(.disabled):focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.show > .btn-outline-light.btn-hover-border-only {
  background: #ffffff;
  border: 1px solid #b3b4e8;
}

.btn-group .btn + .btn, .fc .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc .fc-button-group button + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn, .btn-group .wizard > .actions a + .btn, .wizard > .actions .btn-group a + .btn, .fc .fc-button-group .wizard > .actions a + .btn, .wizard > .actions .fc .fc-button-group a + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc .fc-button-group button + button, .btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .btn-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .btn-group .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group .ajax-file-upload + button, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + button, .btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .btn-group .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + button, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + button, .btn-group .wizard > .actions .fc a + button, .fc .btn-group .wizard > .actions a + button, .wizard > .actions .btn-group .fc a + button, .fc .wizard > .actions .btn-group a + button, .fc .fc-button-group .wizard > .actions a + button, .wizard > .actions .fc .fc-button-group a + button, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn + .ajax-file-upload, .btn-group .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .fc button + .ajax-file-upload, .fc .btn-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group button + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group button + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .ajax-file-upload, .btn-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .btn-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group a + .ajax-file-upload, .fc .fc-button-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .fc .fc-button-group a + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn + .swal2-styled, .btn-group .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .fc button + .swal2-styled, .fc .btn-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group button + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group button + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .fc .fc-button-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .swal2-styled, .btn-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions a + .swal2-styled, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group a + .swal2-styled, .fc .fc-button-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions a + .swal2-styled, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .fc .fc-button-group a + .swal2-styled, .btn-group .wizard > .actions .btn + a, .wizard > .actions .btn-group .btn + a, .fc .fc-button-group .wizard > .actions .btn + a, .wizard > .actions .fc .fc-button-group .btn + a, .btn-group .fc .wizard > .actions button + a, .wizard > .actions .btn-group .fc button + a, .fc .btn-group .wizard > .actions button + a, .wizard > .actions .fc .btn-group button + a, .fc .fc-button-group .wizard > .actions button + a, .wizard > .actions .fc .fc-button-group button + a, .btn-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .btn-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .btn-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group .ajax-file-upload + a, .fc .fc-button-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + a, .btn-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + a, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + a, .btn-group .wizard > .actions a + a, .wizard > .actions .btn-group a + a, .fc .fc-button-group .wizard > .actions a + a, .wizard > .actions .fc .fc-button-group a + a {
  border-left: 0;
}

/*social buttons*/
.btn-twitter {
  background: #2caae1;
  color: #ffffff;
}

.btn-twitter:hover, .btn-twitter:focus {
  background: #1b8dbf;
  color: #ffffff;
}

.btn-twitter.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #59bce7;
}

.btn-twitter.btn-social-icon-text i {
  background: #2caae1;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-twitter {
  border: 1px solid #2caae1;
  color: #2caae1;
}

.btn-outline-twitter:hover {
  background: #2caae1;
  color: #ffffff;
}

.btn-facebook {
  background: #3b579d;
  color: #ffffff;
}

.btn-facebook:hover, .btn-facebook:focus {
  background: #2d4278;
  color: #ffffff;
}

.btn-instagram{
    color:#fff;
    background-color:#3f729b;
    border-color:rgba(0,0,0,0.2)
}
.btn-instagram:focus,.btn-instagram.focus{
    color:#fff;
    background-color:#305777;
    border-color:rgba(0,0,0,0.2)
}
 .btn-instagram:hover{
    color:#fff;
    background-color:#305777;
    border-color:rgba(0,0,0,0.2)
}
 .btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{
    color:#fff;
    background-color:#305777;
    border-color:rgba(0,0,0,0.2)
}
.btn-instagram:active:hover,.btn-instagram.active:hover,.open>.dropdown-toggle.btn-instagram:hover,.btn-instagram:active:focus,.btn-instagram.active:focus,.open>.dropdown-toggle.btn-instagram:focus,.btn-instagram:active.focus,.btn-instagram.active.focus,.open>.dropdown-toggle.btn-instagram.focus{
    color:#fff;
    background-color:#26455d;
    border-color:rgba(0,0,0,0.2)
}
 .btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{
    background-image:none
}
 .btn-instagram.disabled:hover,.btn-instagram[disabled]:hover,fieldset[disabled] .btn-instagram:hover,.btn-instagram.disabled:focus,.btn-instagram[disabled]:focus,fieldset[disabled] .btn-instagram:focus,.btn-instagram.disabled.focus,.btn-instagram[disabled].focus,fieldset[disabled] .btn-instagram.focus{
    background-color:#3f729b;
    border-color:rgba(0,0,0,0.2)
}
 .btn-instagram .badge{
    color:#3f729b;
    background-color:#fff
}

.btn-facebook.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4e6ebd;
}

.btn-facebook.btn-social-icon-text i {
  background: #3b579d;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-facebook {
  border: 1px solid #3b579d;
  color: #3b579d;
}

.btn-outline-facebook:hover {
  background: #3b579d;
  color: #ffffff;
}

.btn-google {
  background: #dc4a38;
  color: #ffffff;
}

.btn-google:hover, .btn-google:focus {
  background: #bf3322;
  color: #ffffff;
}

.btn-google.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e47163;
}

.btn-google.btn-social-icon-text i {
  background: #dc4a38;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-google {
  border: 1px solid #dc4a38;
  color: #dc4a38;
}

.btn-outline-google:hover {
  background: #dc4a38;
  color: #ffffff;
}

.btn-linkedin {
  background: #0177b5;
  color: #ffffff;
}

.btn-linkedin:hover, .btn-linkedin:focus {
  background: #015682;
  color: #ffffff;
}

.btn-linkedin.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #0198e8;
}

.btn-linkedin.btn-social-icon-text i {
  background: #0177b5;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-linkedin {
  border: 1px solid #0177b5;
  color: #0177b5;
}

.btn-outline-linkedin:hover {
  background: #0177b5;
  color: #ffffff;
}

.btn-pinterest {
  background: #cc2127;
  color: #ffffff;
}

.btn-pinterest:hover, .btn-pinterest:focus {
  background: #a01a1f;
  color: #ffffff;
}

.btn-pinterest.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e04046;
}

.btn-pinterest.btn-social-icon-text i {
  background: #cc2127;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  color: #cc2127;
}

.btn-outline-pinterest:hover {
  background: #cc2127;
  color: #ffffff;
}

.btn-youtube {
  background: #e52d27;
  color: #ffffff;
}

.btn-youtube:hover, .btn-youtube:focus {
  background: #c21d17;
  color: #ffffff;
}

.btn-youtube.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ea5955;
}

.btn-youtube.btn-social-icon-text i {
  background: #e52d27;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-youtube {
  border: 1px solid #e52d27;
  color: #e52d27;
}

.btn-outline-youtube:hover {
  background: #e52d27;
  color: #ffffff;
}

.btn-github {
  background: #333333;
  color: #ffffff;
}

.btn-github:hover, .btn-github:focus {
  background: #1a1a1a;
  color: #ffffff;
}

.btn-github.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4d4d4d;
}

.btn-github.btn-social-icon-text i {
  background: #333333;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-github {
  border: 1px solid #333333;
  color: #333333;
}

.btn-outline-github:hover {
  background: #333333;
  color: #ffffff;
}

.btn-behance {
  background: #1769ff;
  color: #ffffff;
}

.btn-behance:hover, .btn-behance:focus {
  background: #0050e3;
  color: #ffffff;
}

.btn-behance.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4a8aff;
}

.btn-behance.btn-social-icon-text i {
  background: #1769ff;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-behance {
  border: 1px solid #1769ff;
  color: #1769ff;
}

.btn-outline-behance:hover {
  background: #1769ff;
  color: #ffffff;
}

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff;
}

.btn-dribbble:hover, .btn-dribbble:focus {
  background: #e51e6b;
  color: #ffffff;
}

.btn-dribbble.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ef7aa7;
}

.btn-dribbble.btn-social-icon-text i {
  background: #ea4c89;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89;
}

.btn-outline-dribbble:hover {
  background: #ea4c89;
  color: #ffffff;
}

.btn-reddit {
  background: #ff4500;
  color: #ffffff;
}

.btn-reddit:hover, .btn-reddit:focus {
  background: #cc3700;
  color: #ffffff;
}

.btn-reddit.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ff6a33;
}

.btn-reddit.btn-social-icon-text i {
  background: #ff4500;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-reddit {
  border: 1px solid #ff4500;
  color: #ff4500;
}

.btn-outline-reddit:hover {
  background: #ff4500;
  color: #ffffff;
}

.btn-hangouts {
  background: #56b83b;
  color: #ffffff;
}

.btn-hangouts:hover, .btn-hangouts:focus {
  background: #44912f;
  color: #ffffff;
}

.btn-hangouts.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #73cb5b;
}

.btn-hangouts.btn-social-icon-text i {
  background: #56b83b;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-hangouts {
  border: 1px solid #56b83b;
  color: #56b83b;
}

.btn-outline-hangouts:hover {
  background: #56b83b;
  color: #ffffff;
}

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(60, 72, 118, 0.2);
  background-image: none;
  border-color: rgba(60, 72, 118, 0);
}

.btn-inverse-primary:not(.btn-inverse-light) {
  color: #3c4876;
}

.btn-inverse-primary:hover {
  color: #ffffff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-inverse-primary.focus, .btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px rgba(60, 72, 118, 0.5);
}

.btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
  color: #3c4876;
  background-color: transparent;
}

.btn-inverse-primary.active, .btn-inverse-primary:active,
.show > .btn-inverse-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #3c4876;
  border-color: #3c4876;
}

.btn-primary, .wizard > .actions a, .btn-primary:hover, .wizard > .actions a:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(60, 72, 118, 0.14), 0 3px 1px -2px rgba(60, 72, 118, 0.2), 0 1px 5px 0 rgba(60, 72, 118, 0.12);
  box-shadow: 0 2px 2px 0 rgba(60, 72, 118, 0.14), 0 3px 1px -2px rgba(60, 72, 118, 0.2), 0 1px 5px 0 rgba(60, 72, 118, 0.12);
}

.btn-inverse-secondary {
  background-color: rgba(223, 227, 233, 0.2);
  background-image: none;
  border-color: rgba(223, 227, 233, 0);
}

.btn-inverse-secondary:not(.btn-inverse-light) {
  color: #dfe3e9;
}

.btn-inverse-secondary:hover {
  color: #ffffff;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
  box-shadow: 0 0 0 3px rgba(223, 227, 233, 0.5);
}

.btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
  color: #dfe3e9;
  background-color: transparent;
}

.btn-inverse-secondary.active, .btn-inverse-secondary:active,
.show > .btn-inverse-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #dfe3e9;
  border-color: #dfe3e9;
}

.btn-secondary, .wizard > .actions .disabled a, .btn-secondary:hover, .wizard > .actions .disabled a:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(223, 227, 233, 0.14), 0 3px 1px -2px rgba(223, 227, 233, 0.2), 0 1px 5px 0 rgba(223, 227, 233, 0.12);
  box-shadow: 0 2px 2px 0 rgba(223, 227, 233, 0.14), 0 3px 1px -2px rgba(223, 227, 233, 0.2), 0 1px 5px 0 rgba(223, 227, 233, 0.12);
}

.btn-inverse-success {
  background-color: rgba(113, 192, 22, 0.2);
  background-image: none;
  border-color: rgba(113, 192, 22, 0);
}

.btn-inverse-success:not(.btn-inverse-light) {
  color: #71c016;
}

.btn-inverse-success:hover {
  color: #ffffff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-inverse-success.focus, .btn-inverse-success:focus {
  box-shadow: 0 0 0 3px rgba(113, 192, 22, 0.5);
}

.btn-inverse-success.disabled, .btn-inverse-success:disabled {
  color: #71c016;
  background-color: transparent;
}

.btn-inverse-success.active, .btn-inverse-success:active,
.show > .btn-inverse-success.dropdown-toggle {
  color: #ffffff;
  background-color: #71c016;
  border-color: #71c016;
}

.btn-success, .btn-success:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(113, 192, 22, 0.14), 0 3px 1px -2px rgba(113, 192, 22, 0.2), 0 1px 5px 0 rgba(113, 192, 22, 0.12);
  box-shadow: 0 2px 2px 0 rgba(113, 192, 22, 0.14), 0 3px 1px -2px rgba(113, 192, 22, 0.2), 0 1px 5px 0 rgba(113, 192, 22, 0.12);
}

.btn-inverse-info {
  background-color: rgba(179, 180, 232, 0.2);
  background-image: none;
  border-color: rgba(179, 180, 232, 0);
}

.btn-inverse-info:not(.btn-inverse-light) {
  color: #b3b4e8;
}

.btn-inverse-info:hover {
  color: #ffffff;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-inverse-info.focus, .btn-inverse-info:focus {
  box-shadow: 0 0 0 3px rgba(179, 180, 232, 0.5);
}

.btn-inverse-info.disabled, .btn-inverse-info:disabled {
  color: #b3b4e8;
  background-color: transparent;
}

.btn-inverse-info.active, .btn-inverse-info:active,
.show > .btn-inverse-info.dropdown-toggle {
  color: #ffffff;
  background-color: #b3b4e8;
  border-color: #b3b4e8;
}

.btn-info, .btn-info:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(179, 180, 232, 0.14), 0 3px 1px -2px rgba(179, 180, 232, 0.2), 0 1px 5px 0 rgba(179, 180, 232, 0.12);
  box-shadow: 0 2px 2px 0 rgba(179, 180, 232, 0.14), 0 3px 1px -2px rgba(179, 180, 232, 0.2), 0 1px 5px 0 rgba(179, 180, 232, 0.12);
}

.btn-inverse-warning {
  background-color: rgba(255, 193, 0, 0.2);
  background-image: none;
  border-color: rgba(255, 193, 0, 0);
}

.btn-inverse-warning:not(.btn-inverse-light) {
  color: #ffc100;
}

.btn-inverse-warning:hover {
  color: #ffffff;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-inverse-warning.focus, .btn-inverse-warning:focus {
  box-shadow: 0 0 0 3px rgba(255, 193, 0, 0.5);
}

.btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
  color: #ffc100;
  background-color: transparent;
}

.btn-inverse-warning.active, .btn-inverse-warning:active,
.show > .btn-inverse-warning.dropdown-toggle {
  color: #ffffff;
  background-color: #ffc100;
  border-color: #ffc100;
}

.btn-warning, .btn-warning:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(255, 193, 0, 0.14), 0 3px 1px -2px rgba(255, 193, 0, 0.2), 0 1px 5px 0 rgba(255, 193, 0, 0.12);
  box-shadow: 0 2px 2px 0 rgba(255, 193, 0, 0.14), 0 3px 1px -2px rgba(255, 193, 0, 0.2), 0 1px 5px 0 rgba(255, 193, 0, 0.12);
}

.btn-inverse-danger {
  background-color: rgba(252, 86, 97, 0.2);
  background-image: none;
  border-color: rgba(252, 86, 97, 0);
}

.btn-inverse-danger:not(.btn-inverse-light) {
  color: #fc5661;
}

.btn-inverse-danger:hover {
  color: #ffffff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-inverse-danger.focus, .btn-inverse-danger:focus {
  box-shadow: 0 0 0 3px rgba(252, 86, 97, 0.5);
}

.btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
  color: #fc5661;
  background-color: transparent;
}

.btn-inverse-danger.active, .btn-inverse-danger:active,
.show > .btn-inverse-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #fc5661;
  border-color: #fc5661;
}

.btn-danger, .btn-danger:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(252, 86, 97, 0.14), 0 3px 1px -2px rgba(252, 86, 97, 0.2), 0 1px 5px 0 rgba(252, 86, 97, 0.12);
  box-shadow: 0 2px 2px 0 rgba(252, 86, 97, 0.14), 0 3px 1px -2px rgba(252, 86, 97, 0.2), 0 1px 5px 0 rgba(252, 86, 97, 0.12);
}

.btn-inverse-light {
  background-color: rgba(248, 249, 250, 0.2);
  background-image: none;
  border-color: rgba(248, 249, 250, 0);
}

.btn-inverse-light:not(.btn-inverse-light) {
  color: #f8f9fa;
}

.btn-inverse-light:hover {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-inverse-light.focus, .btn-inverse-light:focus {
  box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5);
}

.btn-inverse-light.disabled, .btn-inverse-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-inverse-light.active, .btn-inverse-light:active,
.show > .btn-inverse-light.dropdown-toggle {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light, .btn-light:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(248, 249, 250, 0.14), 0 3px 1px -2px rgba(248, 249, 250, 0.2), 0 1px 5px 0 rgba(248, 249, 250, 0.12);
  box-shadow: 0 2px 2px 0 rgba(248, 249, 250, 0.14), 0 3px 1px -2px rgba(248, 249, 250, 0.2), 0 1px 5px 0 rgba(248, 249, 250, 0.12);
}

.btn-inverse-dark {
  background-color: rgba(0, 0, 0, 0.2);
  background-image: none;
  border-color: transparent;
}

.btn-inverse-dark:not(.btn-inverse-light) {
  color: #000000;
}

.btn-inverse-dark:hover {
  color: #ffffff;
  background-color: #000000;
  border-color: #000000;
}

.btn-inverse-dark.focus, .btn-inverse-dark:focus {
  box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.5);
}

.btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
  color: #000000;
  background-color: transparent;
}

.btn-inverse-dark.active, .btn-inverse-dark:active,
.show > .btn-inverse-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #000000;
  border-color: #000000;
}

.btn-dark, .btn-dark:hover {
  -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.view-more-wrapper:hover {
  text-decoration: none;
}

.view-more-wrapper .icon {
  width: 30px;
  height: 30px;
  border: 1px solid #e9e8ef;
  margin-left: 0.6875rem;
}

.hover-dropdown-effect .btn-outline-light:hover, .hover-dropdown-effect .btn-outline-light:active {
  background: transparent;
  border: 1px solid #b3b4e8;
}

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #e9e8ef;
}

.breadcrumb .breadcrumb-item {
  font-size: 0.875rem;
}

.breadcrumb.breadcrumb-custom {
  padding: 0 0;
  border-color: #dbe3e6;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item {
  font-size: 0.875rem;
  background: #dbe3e6;
  padding: 0.56rem 10px;
  color: #000;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:before {
  content: "";
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a {
  position: relative;
  color: inherit;
  border: 1px solid #dbe3e6;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  position: absolute;
  top: -9px;
  width: 0;
  height: 0;
  content: "";
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
  right: -22px;
  z-index: 3;
  border-left-color: #dbe3e6;
  border-left-style: solid;
  border-left-width: 12px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  border-top: 21px solid transparent;
  border-bottom: 22px solid transparent;
  border-left: 12px solid #ffffff;
  top: -9px;
  right: -23px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item span {
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.bg-success, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm, .breadcrumb.bg-dark, .settings-panel .color-tiles .breadcrumb.tiles.dark, .breadcrumb.bg-danger, .breadcrumb.bg-warning, .breadcrumb.bg-primary, .settings-panel .color-tiles .breadcrumb.tiles.primary, .breadcrumb.bg-info, .settings-panel .color-tiles .breadcrumb.tiles.info {
  border: none;
}

.breadcrumb.bg-success .breadcrumb-item, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item {
  color: #ffffff;
}

.breadcrumb.bg-success .breadcrumb-item:before, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item:before {
  color: inherit;
}

.breadcrumb.bg-success .breadcrumb-item a, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item span {
  color: inherit;
}

/* inverse breadcrumb */
.bg-inverse-primary {
  background: #7785ba;
  border-color: #3c4876;
}

.bg-inverse-primary .breadcrumb-item {
  color: #3c4876;
}

.bg-inverse-primary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-primary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-primary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item {
  background: #7785ba;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a {
  color: #3c4876;
  border: none;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #7785ba;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item span {
  color: #3c4876;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-secondary {
  background: white;
  border-color: #dfe3e9;
}

.bg-inverse-secondary .breadcrumb-item {
  color: #dfe3e9;
}

.bg-inverse-secondary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-secondary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-secondary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
  color: #dfe3e9;
  border: none;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
  color: #dfe3e9;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-success {
  background: #afee68;
  border-color: #71c016;
}

.bg-inverse-success .breadcrumb-item {
  color: #71c016;
}

.bg-inverse-success .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-success .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-success.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item {
  background: #afee68;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
  color: #71c016;
  border: none;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #afee68;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
  color: #71c016;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-info {
  background: white;
  border-color: #b3b4e8;
}

.bg-inverse-info .breadcrumb-item {
  color: #b3b4e8;
}

.bg-inverse-info .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-info .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-info.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
  color: #b3b4e8;
  border: none;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
  color: #b3b4e8;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-warning {
  background: #ffe080;
  border-color: #ffc100;
}

.bg-inverse-warning .breadcrumb-item {
  color: #ffc100;
}

.bg-inverse-warning .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-warning .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-warning.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
  background: #ffe080;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
  color: #ffc100;
  border: none;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #ffe080;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
  color: #ffc100;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-danger {
  background: #fed3d6;
  border-color: #fc5661;
}

.bg-inverse-danger .breadcrumb-item {
  color: #fc5661;
}

.bg-inverse-danger .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-danger .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-danger.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
  background: #fed3d6;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
  color: #fc5661;
  border: none;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #fed3d6;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
  color: #fc5661;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-light {
  background: white;
  border-color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item {
  color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-light .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-light.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
  color: #f8f9fa;
  border: none;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
  color: #f8f9fa;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-dark {
  background: #404040;
  border-color: #000000;
}

.bg-inverse-dark .breadcrumb-item {
  color: #000000;
}

.bg-inverse-dark .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-dark .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-dark.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
  background: #404040;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
  color: #000000;
  border: none;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #404040;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
  color: #000000;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

/* Cards */
.card {
  box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  border-color: #e9e8ef;
}

.card .card-body {
  padding: 2rem 1.75rem;
}

.card .card-body + .card-body {
  padding-top: 1rem;
}

.card .card-title {
  color: #3c4876;
  margin-bottom: 1.813rem;
  text-transform: capitalize;
  font-size: 1.125rem;
}

.card .card-subtitle {
  font-weight: 400;
  margin-top: 0.625rem;
  margin-bottom: 0.625rem;
}

.card .card-description {
  margin-bottom: 1.5rem;
  font-weight: 400;
  color: #76838f;
}

.card.card-outline-success {
  border: 1px solid #71c016;
}

.card.card-outline-primary {
  border: 1px solid #3c4876;
}

.card.card-outline-warning {
  border: 1px solid #ffc100;
}

.card.card-outline-danger {
  border: 1px solid #fc5661;
}

.card.card-rounded {
  border-radius: 5px;
}

.card.card-faded {
  background: #b5b0b2;
  border-color: #b5b0b2;
}

.card.card-circle-progress {
  color: #ffffff;
  text-align: center;
}

.card.card-img-holder {
  position: relative;
}

.card.card-img-holder .card-img-absolute {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
}

.card.card-weather .weather-daily .weather-day {
  opacity: .5;
  font-weight: 900;
}

.card.card-weather .weather-daily i {
  font-size: 20px;
}

.card.card-weather .weather-daily .weather-temp {
  margin-top: .5rem;
  margin-bottom: 0;
  opacity: .5;
  font-size: .75rem;
}

.card-inverse-primary {
  background: rgba(60, 72, 118, 0.2);
  border: 1px solid #37426d;
  color: #2e375a;
}

.card-inverse-secondary {
  background: rgba(223, 227, 233, 0.2);
  border: 1px solid #cdd1d6;
  color: #a9adb1;
}

.card-inverse-success {
  background: rgba(113, 192, 22, 0.2);
  border: 1px solid #68b114;
  color: #569211;
}

.card-inverse-info {
  background: rgba(179, 180, 232, 0.2);
  border: 1px solid #a5a6d5;
  color: #8889b0;
}

.card-inverse-warning {
  background: rgba(255, 193, 0, 0.2);
  border: 1px solid #ebb200;
  color: #c29300;
}

.card-inverse-danger {
  background: rgba(252, 86, 97, 0.2);
  border: 1px solid #e84f59;
  color: #c0414a;
}

.card-inverse-light {
  background: rgba(248, 249, 250, 0.2);
  border: 1px solid #e4e5e6;
  color: #bcbdbe;
}

.card-inverse-dark {
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid black;
  color: black;
}

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 0;
}

.form-check .form-check-label {
  min-height: 18px;
  display: block;
  margin-left: 1.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.rtl .form-check .form-check-label {
  margin-left: 0;
  margin-right: 1.75rem;
}

.form-check .form-check-label input {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 0;
  margin-top: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.rtl .form-check .form-check-label input {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  position: absolute;
  top: 0;
  left: 0;
}

.rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before {
  content: "";
  width: 18px;
  height: 18px;
  border-radius: 2px;
  border: solid #3c4876;
  border-width: 2px;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  font-family: Material Design Icons;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  content: '\F12C';
  font-size: .9375rem;
  font-weight: bold;
  color: #ffffff;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
  background: #3c4876;
  border-width: 0;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
  width: 18px;
  opacity: 1;
  line-height: 18px;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
  border-color: #e9e8ef;
}

.form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
  background: #e9e8ef;
  color: #ffffff;
}

.form-check .form-check-label input[type="radio"] + .input-helper:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border: solid #3c4876;
  border-width: 2px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="radio"] + .input-helper:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
  top: 6px;
  left: 6px;
  -webkit-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  position: absolute;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
  left: auto;
  right: 6px;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
  background: #3c4876;
  border-width: 0;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
  opacity: 1;
  line-height: 1.5;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
  border-color: #e9e8ef;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
  background: #e9e8ef;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
  background: #ffffff;
}

.form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-primary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #3c4876;
}

.form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #3c4876;
}

.form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #dfe3e9;
}

.form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #dfe3e9;
}

.form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-success.form-check label input[type="radio"] + .input-helper:before {
  border-color: #71c016;
}

.form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #71c016;
}

.form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-info.form-check label input[type="radio"] + .input-helper:before {
  border-color: #b3b4e8;
}

.form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #b3b4e8;
}

.form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-warning.form-check label input[type="radio"] + .input-helper:before {
  border-color: #ffc100;
}

.form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #ffc100;
}

.form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-danger.form-check label input[type="radio"] + .input-helper:before {
  border-color: #fc5661;
}

.form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #fc5661;
}

.form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-light.form-check label input[type="radio"] + .input-helper:before {
  border-color: #f8f9fa;
}

.form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #f8f9fa;
}

.form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-dark.form-check label input[type="radio"] + .input-helper:before {
  border-color: #000000;
}

.form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #000000;
}

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "Material Design Icons";
  content: "\F140";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: .625rem;
  font-size: 1.25rem;
  margin-left: 0;
}

.dropdown .dropdown-menu {
  margin-top: 0;
  min-width: -webkit-fit-content;
  min-width: -moz-fit-content;
  min-width: fit-content;
  font-size: 0.875rem;
  -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: 0;
}

.dropdown .dropdown-menu .dropdown-item {
  font-size: .875rem;
  padding: .8rem 1.5rem;
}

.dropdown .dropdown-menu .dropdown-item:active {
  background: initial;
}

/* Forms */
.form-group {
  margin-bottom: 1.5rem;
}

.input-group-append,
.input-group-prepend {
  color: #c9c8c8;
  width: auto;
  border: none;
}

.input-group-append .input-group-text,
.input-group-prepend .input-group-text {
  border-color: #e9e8ef;
  padding: 0.875rem 0.75rem;
  color: #c9c8c8;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #e9e8ef;
  font-weight: 400;
  font-size: 0.875rem;
  line-height: normal;
}

select.form-control, select.asColorPicker-input, .dataTables_wrapper select,
.jsgrid .jsgrid-table .jsgrid-filter-row select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 1px solid #e9e8ef;
  color: #c9c8c8;
}

select.form-control:focus, select.asColorPicker-input:focus, .dataTables_wrapper select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
select.tt-query:focus,
select.tt-hint:focus {
  outline: 1px solid #e9e8ef;
}

select.form-control.border-primary, select.border-primary.asColorPicker-input, .dataTables_wrapper select.border-primary,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
select.border-primary.tt-query,
select.border-primary.tt-hint {
  outline: 1px solid #3c4876;
}

select.form-control.border-primary:focus, select.border-primary.asColorPicker-input:focus, .dataTables_wrapper select.border-primary:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
select.border-primary.tt-query:focus,
select.border-primary.tt-hint:focus {
  outline: 1px solid #3c4876;
}

select.form-control.border-secondary, select.form-control.loader-demo-box, select.loader-demo-box.asColorPicker-input, .dataTables_wrapper select.loader-demo-box,
.jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
select.loader-demo-box.tt-query,
select.loader-demo-box.tt-hint, select.border-secondary.asColorPicker-input, .dataTables_wrapper select.border-secondary,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
select.border-secondary.tt-query,
select.border-secondary.tt-hint {
  outline: 1px solid #dfe3e9;
}

select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, select.loader-demo-box.asColorPicker-input:focus, .dataTables_wrapper select.loader-demo-box:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
select.loader-demo-box.tt-query:focus,
select.loader-demo-box.tt-hint:focus, select.border-secondary.asColorPicker-input:focus, .dataTables_wrapper select.border-secondary:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
select.border-secondary.tt-query:focus,
select.border-secondary.tt-hint:focus {
  outline: 1px solid #dfe3e9;
}

select.form-control.border-success, select.border-success.asColorPicker-input, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm, .dataTables_wrapper select.border-success, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-success,
.jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper
.jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm, .select2-container--default .select2-selection--single select.border-success.select2-search__field, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead, .swal2-modal .swal2-buttonswrapper
select.swal2-styled.swal2-confirm.tt-query, .swal2-modal .swal2-buttonswrapper
select.swal2-styled.swal2-confirm.tt-hint, select.border-success.typeahead,
select.border-success.tt-query,
select.border-success.tt-hint {
  outline: 1px solid #71c016;
}

select.form-control.border-success:focus, select.border-success.asColorPicker-input:focus, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm:focus, .dataTables_wrapper select.border-success:focus, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-success:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper
.jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead:focus, .swal2-modal .swal2-buttonswrapper
select.swal2-styled.swal2-confirm.tt-query:focus, .swal2-modal .swal2-buttonswrapper
select.swal2-styled.swal2-confirm.tt-hint:focus, select.border-success.typeahead:focus,
select.border-success.tt-query:focus,
select.border-success.tt-hint:focus {
  outline: 1px solid #71c016;
}

select.form-control.border-info, select.border-info.asColorPicker-input, .dataTables_wrapper select.border-info,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
select.border-info.tt-query,
select.border-info.tt-hint {
  outline: 1px solid #b3b4e8;
}

select.form-control.border-info:focus, select.border-info.asColorPicker-input:focus, .dataTables_wrapper select.border-info:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
select.border-info.tt-query:focus,
select.border-info.tt-hint:focus {
  outline: 1px solid #b3b4e8;
}

select.form-control.border-warning, select.border-warning.asColorPicker-input, .dataTables_wrapper select.border-warning,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
select.border-warning.tt-query,
select.border-warning.tt-hint {
  outline: 1px solid #ffc100;
}

select.form-control.border-warning:focus, select.border-warning.asColorPicker-input:focus, .dataTables_wrapper select.border-warning:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
select.border-warning.tt-query:focus,
select.border-warning.tt-hint:focus {
  outline: 1px solid #ffc100;
}

select.form-control.border-danger, select.border-danger.asColorPicker-input, .dataTables_wrapper select.border-danger,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
select.border-danger.tt-query,
select.border-danger.tt-hint {
  outline: 1px solid #fc5661;
}

select.form-control.border-danger:focus, select.border-danger.asColorPicker-input:focus, .dataTables_wrapper select.border-danger:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
select.border-danger.tt-query:focus,
select.border-danger.tt-hint:focus {
  outline: 1px solid #fc5661;
}

select.form-control.border-light, select.border-light.asColorPicker-input, .dataTables_wrapper select.border-light,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
select.border-light.tt-query,
select.border-light.tt-hint {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-light:focus, select.border-light.asColorPicker-input:focus, .dataTables_wrapper select.border-light:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
select.border-light.tt-query:focus,
select.border-light.tt-hint:focus {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-dark, select.border-dark.asColorPicker-input, .dataTables_wrapper select.border-dark,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
select.border-dark.tt-query,
select.border-dark.tt-hint {
  outline: 1px solid #000000;
}

select.form-control.border-dark:focus, select.border-dark.asColorPicker-input:focus, .dataTables_wrapper select.border-dark:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
select.border-dark.tt-query:focus,
select.border-dark.tt-hint:focus {
  outline: 1px solid #000000;
}

.form-group label {
  font-size: 0.875rem;
  line-height: 1;
  vertical-align: top;
  margin-bottom: .5rem;
}

.form-group.has-danger .form-control, .form-group.has-danger .asColorPicker-input, .form-group.has-danger .dataTables_wrapper select, .dataTables_wrapper .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=text], .form-group.has-danger
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=number], .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead, .form-group.has-danger
.tt-query, .form-group.has-danger
.tt-hint {
  border-color: #fc5661;
}

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute;
}

.form-group .file-upload-info {
  background: transparent;
}

.map-container {
  position: relative;
  min-width: 100%;
  max-width: 100%;
  display: block;
  padding: 35% 0;
  overflow: hidden;
  border-radius: 5px;
}

.map-container .google-map {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.map-container .google-map.no-controls .gmnoprint, .map-container .google-map.no-controls .gm-style-cc {
  display: none;
}

/* Icons */
.icons-list {
  border-left: 1px solid #e9e8ef;
  border-top: 1px solid #e9e8ef;
}

.icons-list > div {
  background: #ffffff;
  border-bottom: 1px solid #e9e8ef;
  border-right: 1px solid #e9e8ef;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 15px 15px;
  font-weight: 400;
  font-size: 0.875rem;
}

.icons-list > div i {
  display: inline-block;
  font-size: 20px;
  width: 40px;
  text-align: left;
  color: #3c4876;
}

.icon-in-bg {
  width: 55px;
  height: 55px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.icon-lg {
  font-size: 3.5rem;
}

.icon-md {
  font-size: 1.5rem;
}

.icon-sm {
  font-size: 1rem;
}

.social-icon-outline {
  border: 1px solid #f2f6f9;
  padding: 7px 15px;
  border-radius: 4px;
  font-size: 20px;
  color: #d2d2d6;
}

.icon-hover-red {
  -webkit-transition: all .2s ease-out;
  transition: all .2s ease-out;
}

.icon-hover-red:hover {
  color: #f96868;
  cursor: pointer;
}

/* Loaders */
#pgloading {
  position: static;
}

#pgloading .bokeh {
  font-size: 100px;
  width: 1em;
  height: 1em;
  position: relative;
  margin: 0 auto;
  border-radius: 50%;
  border: 0.01em solid #e9e8ef;
  list-style: none;
  padding: 0;
}

#pgloading .bokeh li {
  position: absolute;
  width: .2em;
  height: .2em;
  border-radius: 50%;
}

#pgloading .bokeh li:nth-child(1) {
  left: 50%;
  top: 0;
  margin: 0 0 0 -.1em;
  background: #71c016;
  -webkit-transform-origin: 50% 250%;
  transform-origin: 50% 250%;
  -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
  animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(2) {
  top: 50%;
  right: 0;
  margin: -.1em 0 0 0;
  background: #fc5661;
  -webkit-transform-origin: -150% 50%;
  transform-origin: -150% 50%;
  -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
  animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(3) {
  left: 50%;
  bottom: 0;
  margin: 0 0 0 -.1em;
  background: #ffc100;
  -webkit-transform-origin: 50% -150%;
  transform-origin: 50% -150%;
  -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
  animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(4) {
  top: 50%;
  left: 0;
  margin: -.1em 0 0 0;
  background: #3c4876;
  -webkit-transform-origin: 250% 50%;
  transform-origin: 250% 50%;
  -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
  animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
}

@-webkit-keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

@keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

.glowing-loader {
  position: relative;
}

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  transform: translate(-50%, -50%);
}

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent;
}

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  animation: bigcon 2s infinite linear;
  animation-delay: 0.25s;
}

.b {
  border-radius: 50%;
  position: absolute;
}

.s {
  width: 15px;
  height: 15px;
  animation: small 2s infinite ease;
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #3c4876;
}

.s:nth-child(1) {
  top: 0%;
  left: 0%;
}

.s:nth-child(2) {
  top: 0%;
  right: 0%;
}

.s:nth-child(3) {
  right: 0%;
  bottom: 0%;
}

.s:nth-child(4) {
  bottom: 0%;
  left: 0%;
}

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  box-shadow: 0px 0px 10px #3c4876, 0px 0px 20px #3c4876, 0px 0px 30px #3c4876, 0px 0px 50px #3c4876, 0px 0px 60px #3c4876;
  z-index: 1;
  background-color: #3c4876;
  animation: bigball 1s infinite linear;
}

.sb1 {
  animation-delay: -1.75s;
}

.sb6 {
  animation-delay: -1.5s;
}

.sb2 {
  animation-delay: -1.25s;
}

.sb7 {
  animation-delay: -1s;
}

.sb3 {
  animation-delay: -0.75s;
}

.sb8 {
  animation-delay: -0.5s;
}

.sb4 {
  animation-delay: -0.25s;
}

.sb5 {
  animation-delay: -0s;
}

@keyframes bigcon {
  0% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  100% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(405deg);
  }
}

@keyframes small {
  0% {
    transform: scale(1);
    background-color: #6776b1;
  }
  10% {
    transform: scale(1.3);
    background-color: #3c4876;
  }
  15% {
    transform: scale(1);
  }
  25% {
    transform: scale(1);
    background-color: #3c4876;
  }
  100% {
    transform: scale(1);
    background-color: #3c4876;
  }
}

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #ffc100;
  color: #ffc100;
  margin: 80px auto;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  animation: anim 2s linear infinite;
}

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg);
  }
  50% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  75% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  100% {
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg);
  }
}

/* Square box loader */
@keyframes dyinglight {
  15% {
    transform: scale(1.6);
  }
  50% {
    transform: rotate(-89deg);
  }
  100% {
    transform: rotate(-90deg);
  }
}

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
}

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #3c4876;
}

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  transform-origin: 50% 50% 0;
  animation: dyinglight 1s ease infinite;
  backface-visibility: hidden;
}

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #3c4876;
  content: '';
}

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px;
}

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px;
}

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px;
}

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px;
}

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #ffc100;
}

.circle-loader:before {
  z-index: 100;
  animation: spin 1s infinite;
}

.circle-loader:after {
  border: 10px solid #dfe3e9;
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(252, 86, 97, 0.8);
  margin: 35px 5px;
}

.jumping-dots-loader span:nth-child(1) {
  animation: bounce 1s ease-in-out infinite;
}

.jumping-dots-loader span:nth-child(2) {
  animation: bounce 1s ease-in-out 0.33s infinite;
}

.jumping-dots-loader span:nth-child(3) {
  animation: bounce 1s ease-in-out 0.66s infinite;
}

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  25% {
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(252, 86, 97, 0.7);
}

.bar-loader span:nth-child(1) {
  animation: grow 1s ease-in-out infinite;
}

.bar-loader span:nth-child(2) {
  animation: grow 1s ease-in-out 0.15s infinite;
}

.bar-loader span:nth-child(3) {
  animation: grow 1s ease-in-out 0.30s infinite;
}

.bar-loader span:nth-child(4) {
  animation: grow 1s ease-in-out 0.45s infinite;
}

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -o-transform: scaleY(1);
    transform: scaleY(1);
  }
  50% {
    -webkit-transform: scaleY(1.8);
    -ms-transform: scaleY(1.8);
    -o-transform: scaleY(1.8);
    transform: scaleY(1.8);
  }
}

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(113, 192, 22, 0.7);
  animation: squaremove 1s ease-in-out infinite;
}

.square-path-loader:after {
  bottom: 0;
  animation-delay: 0.5s;
}

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    -ms-transform: translate(0, 0) rotate(0);
    -o-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0);
  }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    -ms-transform: translate(40px, 40px) rotate(45deg);
    -o-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg);
  }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    -ms-transform: translate(0px, 80px) rotate(0deg);
    -o-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg);
  }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    -ms-transform: translate(-40px, 40px) rotate(45deg);
    -o-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg);
  }
}

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #3c4876;
  margin: 35px 5px;
  opacity: 0;
}

.dot-opacity-loader span:nth-child(1) {
  animation: opacitychange 1s ease-in-out infinite;
}

.dot-opacity-loader span:nth-child(2) {
  animation: opacitychange 1s ease-in-out 0.33s infinite;
}

.dot-opacity-loader span:nth-child(3) {
  animation: opacitychange 1s ease-in-out 0.66s infinite;
}

@keyframes opacitychange {
  0%, 100% {
    opacity: 0;
  }
  60% {
    opacity: 1;
  }
}

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -moz-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(113, 192, 22, 0.7);
  animation: flip 1s infinite;
}

@keyframes flip {
  0% {
    transform: rotate(0);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(180deg) rotateX(180deg);
  }
}

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(252, 86, 97, 0.7);
  animation: rotatemove 1s infinite;
}

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    -ms-transform: scale(1) translateX(0px);
    -o-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px);
  }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    -ms-transform: scale(2) translateX(45px);
    -o-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px);
  }
}

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.875rem;
}

ul li,
ol li,
dl li {
  line-height: 1.8;
}

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0;
}

.list-ticked li,
.list-arrow li,
.list-star li {
  padding-left: 1.5rem;
}

.list-ticked li:before,
.list-arrow li:before,
.list-star li:before {
  font-family: "Material Design Icons";
  margin-left: -1.5rem;
  width: 1.5rem;
  margin-right: .5rem;
}

.list-ticked li:before {
  content: '\F12D';
  color: #fc5661;
}

.list-arrow li:before {
  content: '\F142';
  color: #71c016;
}

.list-star li:before {
  content: '\F4CE';
  color: #ffc100;
}

.solid-bullet-list {
  position: relative;
  padding-left: 0;
}

.rtl .solid-bullet-list {
  padding-right: 0;
}

.solid-bullet-list li {
  position: relative;
  list-style-type: none;
  padding-left: 25px;
  line-height: 1;
  padding-bottom: 2.125rem;
}

.solid-bullet-list li * {
  line-height: .8;
}

.solid-bullet-list li:before, .solid-bullet-list li:after {
  content: "";
  position: absolute;
}

.solid-bullet-list li:before {
  top: 0;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #3c4876;
  z-index: 1;
}

.solid-bullet-list:after {
  content: "";
  border: 1px solid #e9e8ef;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 4px;
  z-index: 0;
}

.bullet-line-list {
  padding-left: 30px;
  position: relative;
  list-style-type: none;
  margin-bottom: 0;
}

.rtl .bullet-line-list {
  padding-left: unset;
  padding-right: 30px;
}

.bullet-line-list li {
  position: relative;
  margin-bottom: 1.3rem;
}

.bullet-line-list li:before {
  width: 15px;
  height: 15px;
  left: -30px;
  top: 0;
  border: 4px solid #3c4876;
  margin-right: 15px;
  z-index: 2;
  background: #ffffff;
}

.rtl .bullet-line-list li:before {
  left: unset;
  right: -45px;
}

.bullet-line-list li:before {
  content: "";
  position: absolute;
  border-radius: 100%;
}

.bullet-line-list li:last-child {
  margin-bottom: 0;
}

.bullet-line-list:after {
  content: "";
  border: 1px solid #e9e8ef;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 7px;
}

.rtl .bullet-line-list:after {
  left: unset;
  right: 7px;
}

.icon-line-list {
  padding-left: 30px;
  position: relative;
  list-style-type: none;
  margin-bottom: 0;
}

.rtl .icon-line-list {
  padding-left: unset;
  padding-right: 30px;
}

.icon-line-list li {
  position: relative;
  margin-left: 2.062rem;
  background: #f2f6f9;
}

.icon-line-list li h6 {
  line-height: normal;
}

.icon-line-list li:before {
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 0.375rem;
  left: -3.875rem;
  top: 0;
  margin-right: 0.937rem;
  z-index: 2;
  outline: 0.5rem solid white;
}

.rtl .icon-line-list li:before {
  left: unset;
  right: -45px;
}
.icon-line-list li::after {
  content: "\e075";
}
.icon-line-list li::after {
  font-family: "simple-line-icons";
  font-style: normal;
  display: block;
  font-size: 1.125rem;
  line-height: 10px;
  position: absolute;
  left: -3.188rem;
  top: 0.937rem;
  color: white;
  z-index: 3;
}

.icon-line-list li:before {
  content: "";
  position: absolute;
}

.icon-line-list:after {
  content: "";
  width: 1px;
  background: #e9e8ef;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 1.187rem;
  height: calc(100% - 100px);
}

.rtl .icon-line-list:after {
  left: unset;
  right: 7px;
}

/* Modals */
.modal .modal-dialog {
  margin-top: 40px;
}

.modal .modal-dialog .modal-content .modal-header {
  padding: 25px 26px;
  background: #e9ecef;
  transition: all .3s ease-out;
  box-shadow: inset 0px 8px 19px -6px rgba(191,191,191,0.3);
}

.modal .modal-dialog .modal-content .modal-header .close span {
  font-size: 20px;
  font-weight: 400;
  color: #6a6a6a;
}

.modal .modal-dialog .modal-content .modal-body {
   padding: 20px 10px;
}

.modal .modal-dialog .modal-content .modal-footer {
  padding: 15px 31px;
}

/* Pagination */
.pagination .page-item .page-link, .jsgrid .jsgrid-pager .page-item .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page a {
  border-color: #e9e8ef;
  color: #000000;
  font-size: .875rem;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.pagination .page-item .page-link:focus, .jsgrid .jsgrid-pager .page-item .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus, .jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
  background: inherit;
}

.pagination .page-item .page-link i:before, .jsgrid .jsgrid-pager .page-item .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page a i:before {
  font-size: inherit;
  line-height: 1;
  vertical-align: middle;
}

.pagination .page-item.active .page-link, .jsgrid .jsgrid-pager .page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .pagination .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .pagination .page-item:hover .page-link, .jsgrid .jsgrid-pager .page-item:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:hover a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .pagination .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:hover a, .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .pagination .page-item:focus .page-link, .jsgrid .jsgrid-pager .page-item:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:focus .page-link, .pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:focus a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus a, .pagination .page-item:focus
.jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:focus a, .jsgrid .jsgrid-pager .jsgrid-pager-page:focus a, .pagination .page-item:active .page-link, .jsgrid .jsgrid-pager .page-item:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:active .page-link, .pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:active a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active a, .pagination .page-item:active
.jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:active a, .jsgrid .jsgrid-pager .jsgrid-pager-page:active a {
  background: #3c4876;
  border-color: #3c4876;
  color: #ffffff;
}

.pagination.pagination-flat .page-item, .jsgrid .pagination-flat.jsgrid-pager .page-item, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button, .pagination.pagination-flat
.jsgrid .jsgrid-pager .jsgrid-pager-page,
.jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page {
  margin: 0 .25rem;
}

.pagination.pagination-flat .page-item .page-link, .jsgrid .pagination-flat.jsgrid-pager .page-item .page-link, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-flat
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page .page-link, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-flat .page-item a, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-nav-button a, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-flat .page-item a, .pagination.pagination-flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-flat .jsgrid-pager-page a, .jsgrid .pagination-flat.jsgrid-pager .jsgrid-pager-page a {
  border: none;
  border-radius: 2px;
}

.pagination.pagination-separated .page-item, .jsgrid .pagination-separated.jsgrid-pager .page-item, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button, .pagination.pagination-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page,
.jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-separated .page-item:first-child, .jsgrid .pagination-separated.jsgrid-pager .page-item:first-child, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button:first-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child, .pagination.pagination-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child,
.jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page:first-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page:first-child {
  margin-left: 0;
}

.pagination.pagination-separated .page-item:last-child, .jsgrid .pagination-separated.jsgrid-pager .page-item:last-child, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button:last-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child, .pagination.pagination-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child,
.jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page:last-child, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page:last-child {
  margin-right: 0;
}

.pagination.pagination-separated .page-item .page-link, .jsgrid .pagination-separated.jsgrid-pager .page-item .page-link, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page .page-link, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-separated .page-item a, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-nav-button a, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-separated .page-item a, .pagination.pagination-separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-separated .jsgrid-pager-page a, .jsgrid .pagination-separated.jsgrid-pager .jsgrid-pager-page a {
  border-radius: 2px;
}

.pagination.pagination-rounded .page-item:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.pagination-rounded
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:first-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.pagination-rounded .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded .page-item:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child a, .pagination.pagination-rounded .page-item:first-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded .page-item:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page .page-item:first-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:first-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:first-child a {
  border-radius: 25px 0 0 25px;
}

.pagination.pagination-rounded .page-item:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .page-link, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.pagination-rounded
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:last-child .page-link, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.pagination-rounded .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded .page-item:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-nav-button:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child a, .pagination.pagination-rounded .page-item:last-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded .page-item:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page .page-item:last-child a, .pagination.pagination-rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded .jsgrid-pager-page:last-child a, .jsgrid .pagination-rounded.jsgrid-pager .jsgrid-pager-page:last-child a {
  border-radius: 0 25px 25px 0;
}

.pagination.pagination-rounded-flat .page-item, .jsgrid .pagination-rounded-flat.jsgrid-pager .page-item, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button, .pagination.pagination-rounded-flat
.jsgrid .jsgrid-pager .jsgrid-pager-page,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page {
  margin-right: 3px;
  margin-left: 3px;
}

.pagination.pagination-rounded-flat .page-item .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .page-item .page-link, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-rounded-flat
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page .page-link, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-flat .page-item a, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-flat .page-item a, .pagination.pagination-rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-flat .jsgrid-pager-page a, .jsgrid .pagination-rounded-flat.jsgrid-pager .jsgrid-pager-page a {
  border: none;
  border-radius: 50px;
}

.pagination.pagination-rounded-separated .page-item, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-rounded-separated .page-item:first-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child {
  margin-left: 0;
}

.pagination.pagination-rounded-separated .page-item:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.pagination-rounded-separated .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child a, .pagination.pagination-rounded-separated .page-item:first-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:first-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:first-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child a {
  border-radius: 10px 0 0 10px;
}

.pagination.pagination-rounded-separated .page-item:last-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child {
  margin-right: 0;
}

.pagination.pagination-rounded-separated .page-item:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.pagination-rounded-separated .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child a, .pagination.pagination-rounded-separated .page-item:last-child
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:last-child a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page:last-child a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child a {
  border-radius: 0 10px 10px 0;
}

.pagination.pagination-rounded-separated .page-item .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .page-item .page-link, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.pagination-rounded-separated
.jsgrid .jsgrid-pager .jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page .page-link, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.pagination-rounded-separated .page-item a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-nav-button a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.pagination-rounded-separated .page-item a, .pagination.pagination-rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.pagination-rounded-separated .jsgrid-pager-page a, .jsgrid .pagination-rounded-separated.jsgrid-pager .jsgrid-pager-page a {
  border-radius: 2px;
}

/* pagination variations */
.pagination-primary .page-item.active .page-link, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button .page-link, .pagination-primary
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page .page-link, .pagination-primary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item.active a, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button a, .pagination-primary .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item.active a, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page a {
  background: #3c4876;
  border-color: #3c4876;
}

.pagination-primary .page-item:hover .page-link, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button:hover .page-link, .pagination-primary
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page:hover .page-link, .pagination-primary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item:hover a, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button:hover a, .pagination-primary .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item:hover a, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page:hover a {
  background: #455287;
  border-color: #3c4876;
  color: #ffffff;
}

.pagination-secondary .page-item.active .page-link, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button .page-link, .pagination-secondary
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page .page-link, .pagination-secondary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item.active a, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button a, .pagination-secondary .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item.active a, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page a {
  background: #dfe3e9;
  border-color: #dfe3e9;
}

.pagination-secondary .page-item:hover .page-link, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button:hover .page-link, .pagination-secondary
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page:hover .page-link, .pagination-secondary .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item:hover a, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button:hover a, .pagination-secondary .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item:hover a, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page:hover a {
  background: #eef0f3;
  border-color: #dfe3e9;
  color: #ffffff;
}

.pagination-success .page-item.active .page-link, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button .page-link, .pagination-success
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page .page-link, .pagination-success .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item.active a, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button a, .pagination-success .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item.active a, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page a {
  background: #71c016;
  border-color: #71c016;
}

.pagination-success .page-item:hover .page-link, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button:hover .page-link, .pagination-success
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page:hover .page-link, .pagination-success .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item:hover a, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button:hover a, .pagination-success .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item:hover a, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page:hover a {
  background: #7ed719;
  border-color: #71c016;
  color: #ffffff;
}

.pagination-info .page-item.active .page-link, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button .page-link, .pagination-info
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page .page-link, .pagination-info .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item.active a, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button a, .pagination-info .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item.active a, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page a {
  background: #b3b4e8;
  border-color: #b3b4e8;
}

.pagination-info .page-item:hover .page-link, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button:hover .page-link, .pagination-info
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page:hover .page-link, .pagination-info .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item:hover a, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button:hover a, .pagination-info .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item:hover a, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page:hover a {
  background: #c7c7ee;
  border-color: #b3b4e8;
  color: #ffffff;
}

.pagination-warning .page-item.active .page-link, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button .page-link, .pagination-warning
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page .page-link, .pagination-warning .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item.active a, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button a, .pagination-warning .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item.active a, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page a {
  background: #ffc100;
  border-color: #ffc100;
}

.pagination-warning .page-item:hover .page-link, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button:hover .page-link, .pagination-warning
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page:hover .page-link, .pagination-warning .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item:hover a, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button:hover a, .pagination-warning .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item:hover a, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page:hover a {
  background: #ffc71a;
  border-color: #ffc100;
  color: #ffffff;
}

.pagination-danger .page-item.active .page-link, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button .page-link, .pagination-danger
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page .page-link, .pagination-danger .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item.active a, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button a, .pagination-danger .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item.active a, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page a {
  background: #fc5661;
  border-color: #fc5661;
}

.pagination-danger .page-item:hover .page-link, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button:hover .page-link, .pagination-danger
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page:hover .page-link, .pagination-danger .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item:hover a, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button:hover a, .pagination-danger .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item:hover a, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page:hover a {
  background: #fc6f78;
  border-color: #fc5661;
  color: #ffffff;
}

.pagination-light .page-item.active .page-link, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button .page-link, .pagination-light
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page .page-link, .pagination-light .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item.active a, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button a, .pagination-light .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item.active a, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page a {
  background: #f8f9fa;
  border-color: #f8f9fa;
}

.pagination-light .page-item:hover .page-link, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button:hover .page-link, .pagination-light
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page:hover .page-link, .pagination-light .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item:hover a, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button:hover a, .pagination-light .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item:hover a, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page:hover a {
  background: white;
  border-color: #f8f9fa;
  color: #ffffff;
}

.pagination-dark .page-item.active .page-link, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button .page-link, .pagination-dark
.jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link,
.jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page .page-link, .pagination-dark .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item.active a, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button a, .pagination-dark .page-item.active
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item.active a, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page a {
  background: #000000;
  border-color: #000000;
}

.pagination-dark .page-item:hover .page-link, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button:hover .page-link, .pagination-dark
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link,
.jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page:hover .page-link, .pagination-dark .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item:hover a, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button:hover a, .pagination-dark .page-item:hover
.jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item:hover a, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page:hover a {
  background: #0d0d0d;
  border-color: #000000;
  color: #ffffff;
}

/* Popovers */
.popover-static-demo .popover {
  width: 185px;
  position: relative;
  display: block;
  float: left;
  margin: 1rem .5rem;
  z-index: 9;
}

.popover-static-demo .popover.bs-popover-bottom-demo .arrow, .popover-static-demo .popover.bs-popover-top-demo .arrow {
  left: 50%;
}

.popover-static-demo .popover.bs-popover-left-demo .arrow, .popover-static-demo .popover.bs-popover-right-demo .arrow {
  top: 50%;
}

.popover {
  z-index: 9999;
}

.popover.bs-popover-top-demo .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-top-demo .arrow:after {
  border-top-color: #fff;
}

.popover.bs-popover-right-demo .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-right-demo .arrow:after {
  border-right-color: #fff;
}

.popover.bs-popover-bottom-demo .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-bottom-demo .arrow:after {
  border-bottom-color: #fff;
}

.popover.bs-popover-bottom-demo .popover-header:before {
  border-bottom: 0;
}

.popover.bs-popover-left-demo .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-left-demo .arrow:after {
  border-left-color: #fff;
}

.popover .popover-header {
  font-size: .9375rem;
  border-bottom: 0;
  background: #ffffff;
  color: inherit;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.popover .popover-body {
  color: #9b9b9b;
}

.popover.left .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.left .arrow:after {
  border-left-color: #fff;
}

.popover.right .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.right .arrow:after {
  border-right-color: #fff;
}

.popover.top .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.top .arrow:after {
  border-top-color: #fff;
}

.popover.bottom .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bottom .arrow:after {
  border-bottom-color: #fff;
}

.popover-primary {
  border-color: "primary";
}

.popover-primary .popover-header {
  background: #3c4876;
  color: #ffffff;
  border-bottom: 0;
}

.popover-primary.bs-popover-top .arrow:before, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-primary.bs-popover-top .arrow:after, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #3c4876;
}

.popover-primary.bs-popover-right .arrow:before, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-primary.bs-popover-right .arrow:after, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #3c4876;
}

.popover-primary.bs-popover-bottom .arrow:before, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-primary.bs-popover-bottom .arrow:after, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #3c4876;
}

.popover-primary.bs-popover-left .arrow:before, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-primary.bs-popover-left .arrow:after, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #3c4876;
}

.popover-secondary {
  border-color: "secondary";
}

.popover-secondary .popover-header {
  background: #dfe3e9;
  color: #ffffff;
  border-bottom: 0;
}

.popover-secondary.bs-popover-top .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-secondary.bs-popover-top .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #dfe3e9;
}

.popover-secondary.bs-popover-right .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-secondary.bs-popover-right .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #dfe3e9;
}

.popover-secondary.bs-popover-bottom .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-secondary.bs-popover-bottom .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #dfe3e9;
}

.popover-secondary.bs-popover-left .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-secondary.bs-popover-left .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #dfe3e9;
}

.popover-success {
  border-color: "success";
}

.popover-success .popover-header {
  background: #71c016;
  color: #ffffff;
  border-bottom: 0;
}

.popover-success.bs-popover-top .arrow:before, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-success.bs-popover-top .arrow:after, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #71c016;
}

.popover-success.bs-popover-right .arrow:before, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-success.bs-popover-right .arrow:after, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #71c016;
}

.popover-success.bs-popover-bottom .arrow:before, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-success.bs-popover-bottom .arrow:after, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #71c016;
}

.popover-success.bs-popover-left .arrow:before, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-success.bs-popover-left .arrow:after, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #71c016;
}

.popover-info {
  border-color: "info";
}

.popover-info .popover-header {
  background: #b3b4e8;
  color: #ffffff;
  border-bottom: 0;
}

.popover-info.bs-popover-top .arrow:before, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-info.bs-popover-top .arrow:after, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #b3b4e8;
}

.popover-info.bs-popover-right .arrow:before, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-info.bs-popover-right .arrow:after, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #b3b4e8;
}

.popover-info.bs-popover-bottom .arrow:before, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-info.bs-popover-bottom .arrow:after, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #b3b4e8;
}

.popover-info.bs-popover-left .arrow:before, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-info.bs-popover-left .arrow:after, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #b3b4e8;
}

.popover-warning {
  border-color: "warning";
}

.popover-warning .popover-header {
  background: #ffc100;
  color: #ffffff;
  border-bottom: 0;
}

.popover-warning.bs-popover-top .arrow:before, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-warning.bs-popover-top .arrow:after, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #ffc100;
}

.popover-warning.bs-popover-right .arrow:before, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-warning.bs-popover-right .arrow:after, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #ffc100;
}

.popover-warning.bs-popover-bottom .arrow:before, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-warning.bs-popover-bottom .arrow:after, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #ffc100;
}

.popover-warning.bs-popover-left .arrow:before, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-warning.bs-popover-left .arrow:after, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #ffc100;
}

.popover-danger {
  border-color: "danger";
}

.popover-danger .popover-header {
  background: #fc5661;
  color: #ffffff;
  border-bottom: 0;
}

.popover-danger.bs-popover-top .arrow:before, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-danger.bs-popover-top .arrow:after, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #fc5661;
}

.popover-danger.bs-popover-right .arrow:before, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-danger.bs-popover-right .arrow:after, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #fc5661;
}

.popover-danger.bs-popover-bottom .arrow:before, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-danger.bs-popover-bottom .arrow:after, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #fc5661;
}

.popover-danger.bs-popover-left .arrow:before, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-danger.bs-popover-left .arrow:after, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #fc5661;
}

.popover-light {
  border-color: "light";
}

.popover-light .popover-header {
  background: #f8f9fa;
  color: #ffffff;
  border-bottom: 0;
}

.popover-light.bs-popover-top .arrow:before, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-light.bs-popover-top .arrow:after, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #f8f9fa;
}

.popover-light.bs-popover-right .arrow:before, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-light.bs-popover-right .arrow:after, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #f8f9fa;
}

.popover-light.bs-popover-bottom .arrow:before, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-light.bs-popover-bottom .arrow:after, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #f8f9fa;
}

.popover-light.bs-popover-left .arrow:before, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-light.bs-popover-left .arrow:after, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #f8f9fa;
}

.popover-dark {
  border-color: "dark";
}

.popover-dark .popover-header {
  background: #000000;
  color: #ffffff;
  border-bottom: 0;
}

.popover-dark.bs-popover-top .arrow:before, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-dark.bs-popover-top .arrow:after, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #000000;
}

.popover-dark.bs-popover-right .arrow:before, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-dark.bs-popover-right .arrow:after, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #000000;
}

.popover-dark.bs-popover-bottom .arrow:before, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-dark.bs-popover-bottom .arrow:after, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #000000;
}

.popover-dark.bs-popover-left .arrow:before, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-dark.bs-popover-left .arrow:after, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #000000;
}

/* Portfolio */
.portfolio-grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  background: #3c4876;
  text-align: center;
  cursor: pointer;
}

@media (max-width: 767px) {
  .portfolio-grid figure {
    width: 270px;
  }
}

.portfolio-grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  width: 100%;
  opacity: 0.8;
}

.portfolio-grid figure figcaption {
  padding: 2em;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.portfolio-grid figure figcaption:after, .portfolio-grid figure figcaption:before {
  pointer-events: none;
}

.portfolio-grid figure.effect-text-in {
  border-radius: 0.25rem;
}

.portfolio-grid figure.effect-text-in h4,
.portfolio-grid figure.effect-text-in img {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.portfolio-grid figure.effect-text-in img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.portfolio-grid figure.effect-text-in h4,
.portfolio-grid figure.effect-text-in p {
  position: absolute;
  bottom: 10px;
  left: 0;
  padding: 10px;
  margin-bottom: 0;
  width: 100%;
}

.portfolio-grid figure.effect-text-in p {
  text-transform: none;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0, 50px, 0);
  transform: translate3d(0, 50px, 0);
}

.portfolio-grid figure.effect-text-in:hover img {
  -webkit-transform: translate3d(0, -80px, 0);
  transform: translate3d(0, -80px, 0);
}

.portfolio-grid figure.effect-text-in:hover h4 {
  -webkit-transform: translate3d(0, -100px, 0);
  transform: translate3d(0, -100px, 0);
}

.portfolio-grid figure.effect-text-in:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

/* Preview */
.preview-list .preview-item {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  padding: 1.7rem 0;
}

.preview-list .preview-item:last-child {
  border-bottom: 0;
}

.preview-list .preview-item:hover {
  background: #eaeaf1;
}

.preview-list .preview-item .form-check {
  margin-top: 8px;
  margin-right: 1rem;
}

.preview-list .preview-item .preview-thumbnail {
  color: #ffffff;
  position: relative;
}

.preview-list .preview-item .preview-thumbnail img,
.preview-list .preview-item .preview-thumbnail .preview-icon {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.preview-list .preview-item .preview-thumbnail .preview-icon {
  padding: 6px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.preview-list .preview-item .preview-thumbnail .preview-icon i {
  font-size: 1.125rem;
  margin: 0;
}

.preview-list .preview-item .preview-thumbnail .badge {
  border: 2px solid #ffffff;
  border-radius: 100%;
  bottom: 5px;
  display: block;
  height: 14px;
  left: -5px;
  padding: 0;
  position: absolute;
  width: 14px;
}

.preview-list .preview-item .preview-item-content {
  line-height: 1;
  padding-left: 15px;
}

.preview-list .preview-item .preview-item-content:first-child {
  padding-left: 0;
}

.preview-list .preview-item .preview-item-content p {
  margin-bottom: 10px;
}

.preview-list .preview-item .preview-item-content p .content-category {
  font-family: 'source-sans-pro-semibold', sans-serif;
  padding-right: 15px;
  border-right: 1px solid #e9e8ef;
}

.rtl .preview-list .preview-item .preview-item-content {
  padding-left: 0;
  padding-right: 1rem;
  margin-right: 0;
  margin-left: auto;
}

.preview-list .preview-item .preview-actions {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
}

.preview-list .preview-item .preview-actions i {
  width: 29px;
  color: #e6e9ed;
  height: 29px;
  border: 2px solid #e6e9ed;
  border-radius: 100%;
  padding: 3px 6px;
  display: inline-block;
}

.preview-list .preview-item .preview-actions i:first-child {
  margin-right: 10px;
}

.preview-list.comment-preview .preview-item {
  padding: .87rem 0;
}

.preview-list.comment-preview .preview-item:first-child {
  padding-top: 0;
}

.preview-list.comment-preview .preview-item p {
  line-height: 27px;
}

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #e9e8ef;
}

.preview-list.bordered .preview-item:last-child {
  border-bottom: 0;
}

/* Tables */
.table, .jsgrid .jsgrid-table {
  margin-bottom: 0;
}

.table thead th, .jsgrid .jsgrid-table thead th {
  border-bottom-width: 1px;
  font-weight: 500;
  font-size: 14px;
  border: 0;
  font-weight: 500;
}

.table thead th i, .jsgrid .jsgrid-table thead th i {
  margin-left: 0.325rem;
}

.table th, .jsgrid .jsgrid-table th,
.table td, .jsgrid .jsgrid-table td {
  vertical-align: middle;
  line-height: 1;
}

.table td, .jsgrid .jsgrid-table td {
  font-size: 0.875rem;
}

.table td img, .jsgrid .jsgrid-table td img {
  width: 32px;
  height: 32px;
  border-radius: 100%;
}

.table td .badge, .jsgrid .jsgrid-table td .badge {
  margin-bottom: 0;
}

.table.table-borderless, .jsgrid .table-borderless.jsgrid-table {
  border: none;
}

.table.table-borderless tr, .jsgrid .table-borderless.jsgrid-table tr,
.table.table-borderless td, .jsgrid .table-borderless.jsgrid-table td {
  border: none;
}

.table.table-borderless thead th, .jsgrid .table-borderless.jsgrid-table thead th {
  border-bottom: 1px solid #e9e8ef;
  font-weight: bold;
  padding: 0.925rem 0.9375rem;
}

.table.table-borderless tbody tr td, .jsgrid .table-borderless.jsgrid-table tbody tr td {
  padding: 0.5rem 0.8rem;
  font-size: 1rem;
  line-height: normal;
}

.nav-tabs .nav-link {
  background: #f6f8fa;
  color: #000000;
  border-radius: 0;
  border: 1px solid #e9e8ef;
  padding: .75rem 1.5rem;
}

@media (max-width: 767px) {
  .nav-tabs .nav-link {
    padding: .75rem .5rem;
  }
}

.nav-tabs .nav-item:first-child .nav-link {
  border-radius: 4px 0 0 0;
}

.nav-tabs .nav-item:last-child .nav-link {
  border-radius: 0 4px 0 0;
}

.nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom {
  border-bottom: 0;
}

.nav-tabs.nav-tabs-vertical .nav-link.active, .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  border-bottom-color: #e9e8ef;
}

.nav-tabs.nav-tabs-vertical .nav-item:first-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:first-child .nav-link {
  border-radius: 4px 4px 0 0;
}

.nav-tabs.nav-tabs-vertical .nav-item:last-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:last-child .nav-link {
  border-radius: 0 0 4px 4px;
}

.nav-tabs.nav-tabs-vertical-custom {
  background: #3c4876;
  border-radius: 4px;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link {
  background: transparent;
  border-color: rgba(255, 255, 255, 0.2);
  color: #080a11;
  font-weight: 600;
  padding: 1.75rem;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.2);
}

.nav-pills {
  border-bottom: 1px solid #e9e8ef;
  padding-bottom: 1rem;
}

.nav-pills .nav-link {
  border: 1px solid #e9e8ef;
  padding: .5rem 1rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-link {
    padding: .5rem .5rem;
  }
}

.nav-pills .nav-item {
  margin-right: 0.7rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-item {
    margin-right: .5rem;
  }
}

.nav-pills.nav-pills-vertical {
  border-bottom: 0;
}

.nav-pills.nav-pills-vertical .nav-item {
  margin-right: 0;
  margin-bottom: 1rem;
}

.nav-pills.nav-pills-custom {
  border-bottom: 0;
}

.nav-pills.nav-pills-custom .nav-link {
  border-radius: 20px;
  padding: .5rem 2.5rem;
  background: #fcfcfd;
  color: #000;
}

.nav-pills.nav-pills-custom .nav-link.active {
  background: #fc5661;
  color: #ffffff;
}

/* Pills color variations */
.nav-pills-primary .nav-link {
  color: #3c4876;
}

.nav-pills-primary .nav-link.active {
  background: #3c4876;
}

.nav-pills-secondary .nav-link {
  color: #dfe3e9;
}

.nav-pills-secondary .nav-link.active {
  background: #dfe3e9;
}

.nav-pills-success .nav-link {
  color: #71c016;
}

.nav-pills-success .nav-link.active {
  background: #71c016;
}

.nav-pills-info .nav-link {
  color: #b3b4e8;
}

.nav-pills-info .nav-link.active {
  background: #b3b4e8;
}

.nav-pills-warning .nav-link {
  color: #ffc100;
}

.nav-pills-warning .nav-link.active {
  background: #ffc100;
}

.nav-pills-danger .nav-link {
  color: #fc5661;
}

.nav-pills-danger .nav-link.active {
  background: #fc5661;
}

.nav-pills-light .nav-link {
  color: #f8f9fa;
}

.nav-pills-light .nav-link.active {
  background: #f8f9fa;
}

.nav-pills-dark .nav-link {
  color: #000000;
}

.nav-pills-dark .nav-link.active {
  background: #000000;
}

.tab-content {
  border: 1px solid #e9e8ef;
  border-top: 0;
  padding: 2rem 1rem;
  text-align: justify;
}

.tab-content.tab-content-vertical {
  border-top: 1px solid #e9e8ef;
}

.tab-content.tab-content-vertical-custom {
  border: 0;
  padding-top: 0;
}

.tab-content.tab-content-custom-pill {
  border: 0;
  padding-left: 0;
}

/* Timeline */
.timeline {
  list-style: none;
  padding: 0;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #dfe3e9;
  left: 50%;
  margin-left: -1.5px;
}

.timeline .timeline-wrapper {
  display: block;
  margin-bottom: 20px;
  position: relative;
  width: 100%;
  padding-right: 90px;
}

.timeline .timeline-wrapper:before {
  content: " ";
  display: table;
}

.timeline .timeline-wrapper:after {
  content: " ";
  display: table;
  clear: both;
}

.timeline .timeline-wrapper .timeline-panel {
  border-radius: 2px;
  padding: 20px;
  position: relative;
  background: #ffffff;
  border-radius: 6px;
  box-shadow: 1px 2px 35px 0 rgba(1, 1, 1, 0.1);
  width: 35%;
  margin-left: 15%;
}

.timeline .timeline-wrapper .timeline-panel:before {
  position: absolute;
  top: 0;
  width: 100%;
  height: 2px;
  content: "";
  left: 0;
  right: 0;
}

.timeline .timeline-wrapper .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #ffffff;
  border-right: 0 solid #ffffff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline .timeline-wrapper .timeline-panel .timeline-title {
  margin-top: 0;
  color: #000000;
  text-transform: uppercase;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body p {
  margin-bottom: 0;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body p + p {
  margin-top: 5px;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body ul {
  margin-bottom: 0;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer span {
  font-size: .6875rem;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer i {
  font-size: 1.5rem;
}

.timeline .timeline-wrapper .timeline-badge {
  width: 14px;
  height: 14px;
  position: absolute;
  top: 16px;
  left: calc(50% - 7px);
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  border: 2px solid #ffffff;
}

.timeline .timeline-wrapper .timeline-badge i {
  color: #ffffff;
}

.timeline .timeline-wrapper.timeline-inverted {
  padding-right: 0;
  padding-left: 90px;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel {
  margin-left: auto;
  margin-right: 15%;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

@media (max-width: 767px) {
  .timeline .timeline-wrapper {
    padding-right: 150px;
  }
  .timeline .timeline-wrapper.timeline-inverted {
    padding-left: 150px;
  }
  .timeline .timeline-wrapper .timeline-panel {
    width: 100%;
    margin-left: 0;
    margin-right: 0;
  }
}

.timeline-wrapper-primary .timeline-panel:before {
  background: #3c4876;
}

.timeline-wrapper-primary .timeline-badge {
  background: #3c4876;
}

.timeline-wrapper-secondary .timeline-panel:before {
  background: #dfe3e9;
}

.timeline-wrapper-secondary .timeline-badge {
  background: #dfe3e9;
}

.timeline-wrapper-success .timeline-panel:before {
  background: #71c016;
}

.timeline-wrapper-success .timeline-badge {
  background: #71c016;
}

.timeline-wrapper-info .timeline-panel:before {
  background: #b3b4e8;
}

.timeline-wrapper-info .timeline-badge {
  background: #b3b4e8;
}

.timeline-wrapper-warning .timeline-panel:before {
  background: #ffc100;
}

.timeline-wrapper-warning .timeline-badge {
  background: #ffc100;
}

.timeline-wrapper-danger .timeline-panel:before {
  background: #fc5661;
}

.timeline-wrapper-danger .timeline-badge {
  background: #fc5661;
}

.timeline-wrapper-light .timeline-panel:before {
  background: #f8f9fa;
}

.timeline-wrapper-light .timeline-badge {
  background: #f8f9fa;
}

.timeline-wrapper-dark .timeline-panel:before {
  background: #000000;
}

.timeline-wrapper-dark .timeline-badge {
  background: #000000;
}

/* Tabs */
.add-items {
  margin-bottom: 1.5rem;
  overflow: hidden;
}

.add-items input[type="text"] {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  width: 100%;
  background: transparent;
}

.add-items .btn, .add-items .fc button, .fc .add-items button, .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .add-items .ajax-file-upload, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled, .add-items .wizard > .actions a, .wizard > .actions .add-items a {
  margin-left: .5rem;
}

.rtl .add-items .btn, .rtl .add-items .fc button, .fc .rtl .add-items button, .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload, .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled, .rtl .add-items .wizard > .actions a, .wizard > .actions .rtl .add-items a {
  margin-left: auto;
  margin-right: .5rem;
}

.list-wrapper {
  height: 100%;
  max-height: 100%;
}

.list-wrapper ul {
  padding: 0;
  text-align: left;
  list-style: none;
  margin-bottom: 0;
}

.list-wrapper ul li {
  font-size: .9375rem;
  padding: .4rem 0;
  border-bottom: 1px solid #e9e8ef;
}

.list-wrapper ul li:first-child {
  border-bottom: none;
}

.list-wrapper ul li .form-check {
  max-width: 90%;
  margin-top: .25rem;
  margin-bottom: .25rem;
}

.list-wrapper input[type="checkbox"] {
  margin-right: 15px;
}

.list-wrapper .remove {
  cursor: pointer;
  font-size: 1.438rem;
  font-weight: 600;
  width: 1.25rem;
  height: 1.25rem;
  line-height: 20px;
  text-align: center;
}

.list-wrapper .completed {
  text-decoration: line-through;
  text-decoration-color: #b3b4e8;
}

/* Tooltips */
.tooltip-static-demo .tooltip {
  position: relative;
  display: inline-block;
  opacity: 1;
  margin: 0 10px 10px 0;
  z-index: 9;
}

.tooltip-static-demo .bs-tooltip-bottom-demo .arrow,
.tooltip-static-demo .bs-tooltip-top-demo .arrow {
  left: 50%;
}

.tooltip-static-demo .bs-tooltip-right-demo .arrow:before,
.tooltip-static-demo .bs-tooltip-left-demo .arrow:before {
  top: calc((100%-0.8rem)/2);
}

.tooltip {
  font-size: 0.75rem;
  min-width: 5.625rem;
  z-index: 1029;
}

.tooltip .tooltip-inner {
  font-weight: 400;
}

.tooltip-primary .tooltip-inner {
  background: #3c4876;
  color: #ffffff;
}

.tooltip-primary.bs-tooltip-top .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #3c4876;
}

.tooltip-primary.bs-tooltip-right .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #3c4876;
}

.tooltip-primary.bs-tooltip-bottom .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #3c4876;
}

.tooltip-primary.bs-tooltip-left .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #3c4876;
}

.tooltip-secondary .tooltip-inner {
  background: #dfe3e9;
  color: #ffffff;
}

.tooltip-secondary.bs-tooltip-top .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #dfe3e9;
}

.tooltip-secondary.bs-tooltip-right .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #dfe3e9;
}

.tooltip-secondary.bs-tooltip-bottom .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #dfe3e9;
}

.tooltip-secondary.bs-tooltip-left .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #dfe3e9;
}

.tooltip-success .tooltip-inner {
  background: #71c016;
  color: #ffffff;
}

.tooltip-success.bs-tooltip-top .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #71c016;
}

.tooltip-success.bs-tooltip-right .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #71c016;
}

.tooltip-success.bs-tooltip-bottom .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #71c016;
}

.tooltip-success.bs-tooltip-left .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #71c016;
}

.tooltip-info .tooltip-inner {
  background: #b3b4e8;
  color: #ffffff;
}

.tooltip-info.bs-tooltip-top .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #b3b4e8;
}

.tooltip-info.bs-tooltip-right .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #b3b4e8;
}

.tooltip-info.bs-tooltip-bottom .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #b3b4e8;
}

.tooltip-info.bs-tooltip-left .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #b3b4e8;
}

.tooltip-warning .tooltip-inner {
  background: #ffc100;
  color: #ffffff;
}

.tooltip-warning.bs-tooltip-top .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #ffc100;
}

.tooltip-warning.bs-tooltip-right .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #ffc100;
}

.tooltip-warning.bs-tooltip-bottom .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #ffc100;
}

.tooltip-warning.bs-tooltip-left .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #ffc100;
}

.tooltip-danger .tooltip-inner {
  background: #fc5661;
  color: #ffffff;
}

.tooltip-danger.bs-tooltip-top .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #fc5661;
}

.tooltip-danger.bs-tooltip-right .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #fc5661;
}

.tooltip-danger.bs-tooltip-bottom .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #fc5661;
}

.tooltip-danger.bs-tooltip-left .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #fc5661;
}

.tooltip-light .tooltip-inner {
  background: #f8f9fa;
  color: #ffffff;
}

.tooltip-light.bs-tooltip-top .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-right .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-bottom .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #f8f9fa;
}

.tooltip-light.bs-tooltip-left .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #f8f9fa;
}

.tooltip-dark .tooltip-inner {
  background: #000000;
  color: #ffffff;
}

.tooltip-dark.bs-tooltip-top .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #000000;
}

.tooltip-dark.bs-tooltip-right .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #000000;
}

.tooltip-dark.bs-tooltip-bottom .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #000000;
}

.tooltip-dark.bs-tooltip-left .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #000000;
}

.profile-navbar .nav-item .nav-link {
  color: #000;
}

.profile-navbar .nav-item .nav-link.active {
  color: #3c4876;
}

.profile-navbar .nav-item .nav-link i {
  font-size: 1.25rem;
}

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #e9e8ef;
}

/* Pricing table */
.pricing-table .pricing-card .pricing-card-body {
  padding: 50px 56px 43px 56px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features {
  width: 100%;
  margin-bottom: 32px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features li {
  text-align: left;
  padding: 4px 0px;
  font-weight: 400;
  font-size: 0.875rem;
}

/*-------------------------------------------------------------------*/
/* === Email === */
/* Mail Sidebar */
@media (max-width: 769px) {
  .email-wrapper .mail-sidebar {
    position: relative;
  }
}

@media (max-width: 767.98px) {
  .email-wrapper .mail-sidebar {
    position: fixed;
    z-index: 99;
    background: #ffffff;
    width: 45%;
    min-width: 300px;
    left: -100%;
    display: block;
    transition: 0.4s ease;
    -webkit-transition: 0.4s ease;
    -moz-transition: 0.4s ease;
  }
}

.email-wrapper .mail-sidebar .menu-bar {
  width: 100%;
  float: right;
  height: 100%;
  min-height: 100%;
}

@media (max-width: 767.98px) {
  .email-wrapper .mail-sidebar .menu-bar {
    min-height: 100vh;
    max-height: 100%;
    height: auto;
    overflow-y: auto;
    overflow-x: hidden;
  }
}

.email-wrapper .mail-sidebar .menu-bar .menu-items {
  padding: 0;
  margin-bottom: 0;
  height: auto;
  list-style-type: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li {
  padding: 10px 15px;
  transition: 0.4s;
  position: relative;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: space-between;
  justify-content: space-between;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li:hover {
  background: rgba(240, 244, 249, 0.8);
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a {
  color: #303a40;
  font-size: 0.875rem;
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a i {
  margin-right: 8px;
  font-size: 0.875rem;
  line-height: 1.5;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.active {
  background: #e6e9ed;
  border-radius: 4px;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.active a {
  color: #3c4876;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.compose:hover {
  background: transparent;
}

.email-wrapper .mail-sidebar .menu-bar .online-status {
  margin-top: 1rem;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .chat {
  font-size: 0.875rem;
  color: #3c4876;
  margin-bottom: 0;
  font-weight: 600;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  display: inline-flex;
  justify-content: flex-start;
  transform: translateX(-43px) translateY(2px);
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status:after {
  font-size: 12px;
  color: #2e383e;
  margin: -5px 0 0 18px;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline {
  background: #fc5661;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline:after {
  content: "Offline";
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online {
  background: #71c016;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online:after {
  content: "Online";
}

.email-wrapper .mail-sidebar .menu-bar .profile-list {
  padding: 10px 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item {
  border-bottom: 1px solid #e9e8ef;
  padding: 6px 0;
  display: block;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item:last-child {
  border-bottom: 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a {
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 0;
  width: 20%;
  max-width: 40px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic img {
  max-width: 100%;
  width: 100%;
  border-radius: 100%;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  width: 100%;
  padding: 5px 10px 0 15px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name {
  margin: 0;
  font-weight: 400;
  font-size: 0.875rem;
  line-height: 1;
  color: #000000;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation {
  font-size: calc(0.875rem - 0.1rem);
  margin-bottom: 0;
}

.email-wrapper .sidebar.open {
  left: 0;
}

/* Mail List Container */
.email-wrapper .mail-list-container {
  border-left: 1px solid #e9e8ef;
  height: 100%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container a {
  text-decoration: none;
}

.email-wrapper .mail-list-container .mail-list {
  border-bottom: 1px solid #e9e8ef;
  display: flex;
  flex-direction: row;
  padding: 10px 15px;
  width: 100%;
}

.email-wrapper .mail-list-container .mail-list:last-child {
  border-bottom: none;
}

.email-wrapper .mail-list-container .mail-list .form-check {
  margin-top: 12px;
  width: 11%;
  min-width: 20px;
}

.email-wrapper .mail-list-container .mail-list .content {
  width: 83%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container .mail-list .content .sender-name {
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: 400;
  max-width: 95%;
}

.email-wrapper .mail-list-container .mail-list .content .message_text {
  margin: 0;
  max-width: 93%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details {
  width: 5.5%;
}

.email-wrapper .mail-list-container .mail-list .details .date {
  text-align: right;
  margin: auto 15px auto 0;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details i {
  margin: auto 0;
  color: #ddd;
}

.email-wrapper .mail-list-container .mail-list .details i.favorite {
  color: #ffc100;
}

.email-wrapper .mail-list-container .mail-list.new_mail {
  background: #e6e9ed;
}

.email-wrapper .mail-list-container .mail-list.new_mail .details .date {
  color: #000000;
}

/* Message Content */
.email-wrapper .message-body .sender-details {
  padding: 20px 15px 0;
  border-bottom: 1px solid #e9e8ef;
  display: -webkit-flex;
  display: flex;
}

.email-wrapper .message-body .sender-details .details {
  padding-bottom: 0;
}

.email-wrapper .message-body .sender-details .details .msg-subject {
  margin-bottom: 0;
  font-weight: 600;
}

.email-wrapper .message-body .sender-details .details .sender-email {
  margin-bottom: 20px;
  font-weight: 400;
}

.email-wrapper .message-body .sender-details .details .sender-email i {
  font-size: 1rem;
  font-weight: 600;
  margin: 0 1px 0 7px;
}

.email-wrapper .message-body .message-content {
  padding: 50px 15px;
}

.email-wrapper .message-body .attachments-sections ul {
  list-style: none;
  border-top: 1px solid #e9e8ef;
  padding: 30px 15px 20px;
}

.email-wrapper .message-body .attachments-sections ul li {
  padding: 10px;
  margin-right: 20px;
  border: 1px solid #e9e8ef;
  border-radius: 5px;
}

.email-wrapper .message-body .attachments-sections ul li .thumb {
  display: inline-block;
  margin-right: 10px;
}

.email-wrapper .message-body .attachments-sections ul li .thumb i {
  font-size: 30px;
  margin: 0;
  color: #2e383e;
}

.email-wrapper .message-body .attachments-sections ul li .details p.file-name {
  display: block;
  margin-bottom: 0;
  color: #2e383e;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons .file-size {
  margin-right: 10px;
  margin-bottom: 0;
  font-size: 13px;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons a {
  font-size: 13px;
  margin-right: 10px;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons a:last-child {
  margin-right: 0;
}

/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Ace Editor */
.ace_editor {
  margin: auto;
  min-height: 150px;
  width: 100%;
}

.ace_editor .ace_content {
  font-size: 0.875rem;
}

/* Avgrund Popup */
.avgrund-popin {
  position: absolute;
  background: #fff;
  padding: 37px 33px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 50%;
  left: 50%;
  z-index: 1000;
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
  line-height: 1.85;
  border-radius: 10px;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

.avgrund-popin p {
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
}

.avgrund-overlay {
  background: #000;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 101;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
}

body.avgrund-ready,
.avgrund-ready .avgrund-popin,
.avgrund-ready .avgrund-overlay {
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: 0.3s all ease-out;
  -moz-transition: 0.3s all ease-out;
  -ms-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}

body.avgrund-active {
  overflow: hidden;
}

.avgrund-active .avgrund-popin {
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

.avgrund-active .avgrund-overlay {
  visibility: visible;
  opacity: .5;
  filter: alpha(opacity=50);
  height: 20000px;
}

.avgrund-popin.stack {
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -o-transform: scale(1.5);
  transform: scale(1.5);
}

.avgrund-active .avgrund-popin.stack {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

/* Optional close button styles */
.avgrund-close {
  display: block;
  color: #fff;
  background: #000;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  top: 10px;
  right: 10px;
  height: 17px;
  width: 17px;
  text-align: center;
  line-height: 16px;
  border-radius: 50px;
}

.avgrund-close:hover {
  color: #fff;
  text-decoration: none;
}

/* Chartist */
.ct-series-a .ct-line {
  stroke: #a29afc;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-a .ct-point {
  stroke: #6355f9;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-b .ct-line {
  stroke: #80d691;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-b .ct-point {
  stroke: #4ac462;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-c .ct-line {
  stroke: #f7cb9b;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-c .ct-point {
  stroke: #f2a859;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-a .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-b .ct-bar {
  stroke: #80d691;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-c .ct-bar {
  stroke: #f7cb9b;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-d .ct-bar {
  stroke: #fcb2b2;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-a .ct-slice-pie {
  fill: #a29afc;
  stroke-width: 4px;
}

.ct-series-b .ct-slice-pie {
  fill: #80d691;
  stroke-width: 4px;
}

.ct-series-c .ct-slice-pie {
  fill: #fcb2b2;
  stroke-width: 4px;
}

.ct-series-d .ct-slice-pie {
  fill: #f7cb9b;
  stroke-width: 4px;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #a29afc;
}

.ct-series-b .ct-slice-donut-solid {
  fill: #80d691;
}

.ct-series-c .ct-slice-donut-solid {
  fill: #fcb2b2;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #f7cb9b;
}

#ct-chart-dash-barChart .ct-series-a .ct-bar {
  stroke: #fb9999;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-b .ct-bar {
  stroke: #8b81fb;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-c .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-d .ct-bar {
  stroke: #b9b3fc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}


/* Colcade */
* {
  box-sizing: border-box;
}

.grid {
  border: 1px solid #d3d3d3 est;
}

.grid:after {
  display: block;
  content: '';
  clear: both;
}

.grid-col {
  float: left;
  width: 49%;
  margin-right: 2%;
  background: rgba(60, 72, 118, 0.2);
}

.grid-col--4 {
  margin-right: 0;
}

/* hide two middle */
.grid-col--2, .grid-col--3 {
  display: none;
}

@media (min-width: 768px) {
  .grid-col {
    width: 32%;
  }
  .grid-col--2 {
    display: block;
  }
}

@media (min-width: 1200px) {
  .grid-col {
    width: 23.5%;
  }
  .grid-col--2, .grid-col--3 {
    display: block;
  }
}

.grid-item {
  background: #3c4876;
  margin-bottom: 20px;
}

.grid-item--a {
  height: 80px;
}

.grid-item--b {
  height: 140px;
}

.grid-item--c {
  height: 300px;
}

/* Colorpicker */
.asColorPicker-dropdown {
  max-width: initial;
}

.asColorPicker-trigger {
  height: auto;
  border: 0;
}

.asColorPicker-trigger span {
  border-radius: 2px;
  width: 35px;
}

/* Context Menu */
.context-menu-icon:before {
  color: #000;
  font: normal normal normal 15px/1 "Material Design Icons";
}

.context-menu-icon.context-menu-icon-cut:before {
  content: '\F190';
}

.context-menu-icon.context-menu-icon-edit:before {
  content: '\F3EF';
}

.context-menu-icon.context-menu-icon-copy:before {
  content: '\F18F';
}

.context-menu-icon.context-menu-icon-paste:before {
  content: '\F613';
}

.context-menu-icon.context-menu-icon-delete:before {
  content: '\F6CB';
}

.context-menu-icon.context-menu-icon-quit:before {
  content: '\F156';
}

.context-menu-list {
  box-shadow: none;
  border: 1px solid #e9e8ef;
}

.context-menu-list .context-menu-item span {
  color: #000;
  font-size: .75rem;
  font-weight: 600;
}

.context-menu-list .context-menu-item.context-menu-hover {
  background: #000;
}

.context-menu-list .context-menu-item.context-menu-hover span {
  color: #ffffff;
}

/* Data Tables */
.dataTables_wrapper {
  padding-left: 0;
  padding-right: 0;
}

.dataTables_wrapper label {
  font-size: .8125rem;
}

.dataTables_wrapper select {
  padding: .4rem;
}

.dataTables_wrapper .dataTables_length select {
  margin-left: .25rem;
  margin-right: .25rem;
}

.dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .fc button, .fc .dataTables_wrapper .dataTable button, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled, .dataTables_wrapper .dataTable .wizard > .actions a, .wizard > .actions .dataTables_wrapper .dataTable a {
  padding: 0.2rem 0.5rem;
  vertical-align: top;
}

.dataTables_wrapper .dataTable thead th {
  border-bottom-width: 0;
}

.dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  line-height: 2.5;
  font-family: Material Design Icons;
  font-size: .65rem;
}

.dataTables_wrapper .dataTable thead .sorting:before,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before {
  content: "\F05D";
  right: 1.2em;
}

.dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  content: "\F045";
  right: 0.2em;
}

.dataTables_wrapper .dataTables_paginate {
  margin-top: 20px;
}

.dataTables_wrapper .dataTables_info {
  font-size: 0.875rem;
}

/* Datepicker */
.datepicker.datepicker-dropdown,
.datepicker.datepicker-inline {
  padding: 0;
  width: 30%;
  max-width: 500px;
  min-width: 250px;
}

.datepicker.datepicker-dropdown .datepicker-days,
.datepicker.datepicker-inline .datepicker-days {
  padding: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed,
.datepicker.datepicker-inline .datepicker-days table.table-condensed {
  width: 100%;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th {
  text-align: center;
  padding: 0.5rem 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.prev,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.prev {
  color: #000;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.datepicker-switch,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.datepicker-switch {
  color: #000;
  background: #ffffff;
  padding-bottom: 1rem;
  padding-top: 1rem;
  font-size: 1rem;
  font-weight: 600;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.next,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.next {
  color: #000;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow {
  font-family: 'Fira Sans', sans-serif;
  color: #000;
  font-size: 0.875rem;
  font-weight: initial;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody {
  position: relative;
  top: 13px;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td {
  text-align: center;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day {
  font-size: 0.9375rem;
  padding: 0.5rem 0;
  color: #000;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day:hover,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day:hover {
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #71c016;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #3c4876;
  border-radius: 4px;
  box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  -webkit-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  -moz-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.old.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.old.day {
  color: #d9dde3;
}

.datepicker.datepicker-inline {
  width: 100%;
  max-width: 100%;
  min-width: 250px;
}

.datepicker.datepicker-inline thead tr th.prev {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.datepicker-switch {
  color: #3c4876;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.next {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker > div {
  display: initial;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  border-radius: 2px;
}

.datepicker.input-group, .datepicker.asColorPicker-wrap {
  border: 1px solid #e9e8ef;
  padding: 0;
}

.datepicker.input-group .form-control, .datepicker.asColorPicker-wrap .form-control, .datepicker.input-group .asColorPicker-input, .datepicker.asColorPicker-wrap .asColorPicker-input, .datepicker.input-group .dataTables_wrapper select, .dataTables_wrapper .datepicker.input-group select, .datepicker.asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .datepicker.asColorPicker-wrap select, .datepicker.input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group input[type=text], .datepicker.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap input[type=text], .datepicker.input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group select, .datepicker.asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap select, .datepicker.input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.input-group input[type=number], .datepicker.asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .datepicker.asColorPicker-wrap input[type=number], .datepicker.input-group .select2-container--default .select2-selection--single, .select2-container--default .datepicker.input-group .select2-selection--single, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .datepicker.asColorPicker-wrap .select2-selection--single, .datepicker.input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.input-group .select2-search__field, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.asColorPicker-wrap .select2-search__field, .datepicker.input-group .typeahead, .datepicker.asColorPicker-wrap .typeahead, .datepicker.input-group
.tt-query, .datepicker.asColorPicker-wrap
.tt-query, .datepicker.input-group
.tt-hint, .datepicker.asColorPicker-wrap
.tt-hint {
  border: none;
}

.datepicker-dropdown:after {
  border-bottom-color: #fff;
}

.datepicker-dropdown:before {
  border-bottom-color: #e9e8ef;
}

.datepicker-dropdown.datepicker-orient-top:before, .datepicker-dropdown.datepicker-orient-top:after {
  top: auto;
}

.datepicker-dropdown.datepicker-orient-top:after {
  border-top-color: #fff;
}

.datepicker-dropdown.datepicker-orient-top:before {
  border-top-color: #e9e8ef;
}

/* Dropify */
.dropify-wrapper {
  border: 2px dashed #e9e8ef;
  border-radius: 7px;
}

.dropify-wrapper:hover {
  background-size: 30px 30px;
  background-image: -webkit-linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  background-image: linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  -webkit-animation: stripes 2s linear infinite;
  animation: stripes 2s linear infinite;
}

.dropify-wrapper .dropify-message span.file-icon:before {
  display: inline-block;
  font: normal normal normal 24px/1 "Material Design Icons";
  font-size: inherit;
  text-rendering: auto;
  line-height: inherit;
  -webkit-font-smoothing: antialiased;
  content: '\F552';
  color: #000;
  font-size: 1.25rem;
}

.dropify-wrapper .dropify-message p {
  font-size: .8125rem;
  color: #000;
}

.dropify-wrapper .dropify-preview .dropify-infos {
  background: rgba(255, 255, 255, 0.9);
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-filename {
  color: #3c4876;
  font-size: 20px;
  font-weight: 400;
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-infos-message {
  color: #333;
  font-weight: 500;
}

.dropify-wrapper .dropify-preview .dropify-render img {
  opacity: 0.7;
}

.dropify-wrapper .dropify-clear {
  background: #fff;
  border: none;
  font-weight: 600;
  color: #434a54;
}

/* Dropzone */
.dropzone {
  border: 1px solid #e9e8ef;
  height: 200px;
}

.dropzone .dz-message {
  text-align: center;
  width: 100%;
}

.dropzone .dz-message span {
  font-size: .8125rem;
  color: #000;
}

/* Flot chart */
.flot-chart-container {
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  min-height: 300px;
  max-height: 100%;
}

.flot-chart {
  width: 100%;
  position: relative;
  max-width: none;
  height: 400px;
}

.flot-chart canvas {
  position: absolute;
  top: 0;
  bottom: 0;
}

/* Full Calendar */
.fc button {
  height: auto;
  background-image: none;
  text-shadow: none;
  font-weight: 400;
  background-color: #ffffff;
  border-color: #e9e8ef;
  text-transform: capitalize;
  color: #a8b2b9;
}

.fc button .fc-icon-right-single-arrow:after,
.fc button .fc-icon-left-single-arrow:after {
  color: #a8b2b9;
  font: normal normal normal 20px/1 "Material Design Icons";
}

.fc button .fc-icon-right-single-arrow:after {
  content: "\F142";
}

.fc button .fc-icon-left-single-arrow:after {
  content: "\F141";
}

.fc .fc-button-group .fc-button {
  background-color: #ffffff;
  margin: 0;
}

.fc .fc-button-group .fc-button.fc-state-active {
  color: #fc5661;
}

.fc .fc-header-toolbar {
  margin-top: 2rem;
}

.fc .fc-header-toolbar .fc-center h2 {
  font-size: 1rem;
}

@media (max-width: 767px) {
  .fc .fc-header-toolbar .fc-left,
  .fc .fc-header-toolbar .fc-right,
  .fc .fc-header-toolbar .fc-center {
    float: none;
    margin-bottom: 10px;
  }
  .fc .fc-header-toolbar .fc-left:after,
  .fc .fc-header-toolbar .fc-right:after,
  .fc .fc-header-toolbar .fc-center:after {
    content: "";
    clear: both;
    display: block;
  }
  .fc .fc-header-toolbar .fc-left .fc-today-button {
    float: right;
  }
  .fc .fc-header-toolbar .fc-right .fc-button-group {
    float: none;
  }
}

.fc .fc-widget-header {
  border: 0;
}

.fc .fc-widget-header table tr th {
  border-width: 0 0 1px 0;
  text-align: right;
  padding: 1rem;
}

@media (max-width: 767px) {
  .fc .fc-widget-header table tr th {
    padding: 1rem .25rem;
  }
}

.fc .fc-widget-header table tr th span {
  font-size: 10px;
  text-transform: uppercase;
  color: #a8b2b9;
  letter-spacing: 1px;
}

.fc .fc-content-skeleton table tr td {
  padding: .5rem;
  font-size: .875rem;
}

.fc .fc-event {
  border: 0;
  color: #ffffff;
  padding: .5rem;
}

.fc .fc-event.fc-start {
  background: #3c4876;
  border-radius: 4px;
  border-left: 4px solid #3c4876;
}

.fc .fc-event.fc-not-start, .fc .fc-event.fc-not-end {
  background: #fc5661;
  border-left: 4px solid #fc5661;
  padding-left: .5rem;
}

.fc .fc-event.fc-not-end {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.fc .fc-event .fc-title,
.fc .fc-event .fc-time {
  color: #ffffff;
}

.fc-external-events .fc-event {
  background: #ffffff;
  color: #000;
  border-width: 0 0 0 4px;
  padding: 16px;
  border-radius: 0;
  margin-bottom: 10px;
}

.fc-external-events .fc-event:nth-child(1) {
  border-color: #3c4876;
}

.fc-external-events .fc-event:nth-child(2) {
  border-color: #fc5661;
}

.fc-external-events .fc-event:nth-child(3) {
  border-color: #71c016;
}

.fc-external-events .fc-event:nth-child(4) {
  border-color: #b3b4e8;
}

.fc-external-events .fc-event:nth-child(4) {
  border-color: #ffc100;
}

/* Google Charts */
.google-chart-container .google-charts {
  width: 100%;
  height: 280px;
  min-height: 280px;
  min-width: 100%;
}

/* Icheck */
.icheck,
.icheck-flat,
.icheck-square,
.icheck-line {
  margin-bottom: .5rem;
}

.icheck label,
.icheck-flat label,
.icheck-square label,
.icheck-line label {
  font-size: .8125rem;
  line-height: 1.5;
  margin-left: 5px;
  margin-bottom: 0;
}

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #e9e8ef;
  border-style: dotted;
  max-width: 100%;
}

.ajax-upload-dragdrop span b {
  font-size: .8125rem;
  color: #000;
  font-weight: initial;
}

.ajax-upload-dragdrop .ajax-file-upload {
  background: #b3b4e8;
  box-shadow: none;
  height: auto;
}

.ajax-file-upload-container {
  min-height: 100px;
}

.ajax-file-upload-container .ajax-file-upload-statusbar {
  max-width: 100%;
}

/* Js-grid */
.jsgrid .jsgrid-button {
  background-image: url(../../images/sprites/jsgrid-icons.png);
}

.jsgrid .jsgrid-grid-header {
  border: 1px solid #e9e8ef;
  border-top: 0;
}

.jsgrid .jsgrid-table th {
  font-weight: initial;
  font-weight: 600;
}

.jsgrid .jsgrid-table .jsgrid-filter-row input[type=number] {
  padding: .56rem 0;
}

.jsgrid .jsgrid-header-sort:before {
  margin-top: 10px;
  float: right;
}

.jsgrid .jsgrid-header-sort-asc:before {
  border-color: transparent transparent #000;
}

.jsgrid .jsgrid-header-sort-desc:before {
  border-color: #000 transparent transparent;
}

.jsgrid .jsgrid-pager {
  line-height: 2;
}

.jsgrid .jsgrid-pager-current-page {
  padding: 0.5rem 0.75rem;
  font-weight: initial;
  line-height: 1.25;
}

/* Jvectormap */
.jvectormap-container {
  background: #ffffff;
}

/* Light Gallery */
.lightGallery {
  width: 100%;
  margin: 0;
}

.lightGallery .image-tile {
  position: relative;
  margin-bottom: 30px;
}

.lightGallery .image-tile .demo-gallery-poster {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.lightGallery .image-tile .demo-gallery-poster img {
  display: block;
  margin: auto;
  width: 40%;
  max-width: 60px;
  min-width: 20px;
}

.lightGallery .image-tile img {
  max-width: 100%;
  width: 100%;
}

/* Listify */
.listify-list input {
  border: 1px solid #f2f7f8;
  color: #d3d3d3;
  background: #fff;
}

.listify-list ul.list {
  list-style: none;
  padding-left: 0;
}

.listify-list ul.list li {
  display: block;
  border-bottom: 1px solid #e9e8ef;
  padding: 15px 10px;
}

.listify-list ul.list li h5 {
  color: #3c4876;
}

.listify-list ul.list li p {
  color: #d3d3d3;
  margin: 0;
}

/* No-ui-slider */
.noUi-target {
  border: none;
  box-shadow: none;
  border-radius: 0px;
}

.noUi-target.noUi-horizontal {
  height: 0.25rem;
}

.noUi-target.noUi-horizontal .noUi-handle {
  left: -17px;
}

.noUi-target.noUi-vertical {
  width: 0.25rem;
  height: 156px;
  display: inline-block;
}

.noUi-target.noUi-vertical .noUi-handle {
  left: -6px;
}

.noUi-target .noUi-base {
  background: #e6e9ed;
  box-shadow: none;
  border: none;
}

.noUi-target .noUi-base .noUi-connect {
  background: #3c4876;
  box-shadow: none;
}

.noUi-target .noUi-base .noUi-origin {
  background: #71c016;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle {
  position: relative;
  background: #ffffff;
  border-radius: 100%;
  border: 1px solid #e9e8ef;
  width: 18px;
  height: 18px;
  top: -7px;
  outline: none;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after, .noUi-target .noUi-base .noUi-origin .noUi-handle:before {
  display: none;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after {
  display: block;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  margin: auto;
  width: 6px;
  height: 6px;
  background: #3c4876;
  border-radius: 100%;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  font-weight: 600;
  border-radius: 4px;
  border: none;
  line-height: 1;
  font-size: 0.875rem;
  padding: 13px 12px;
  bottom: 190%;
}

.noUi-target .noUi-pips .noUi-marker-horizontal, .noUi-target .noUi-pips .noUi-marker-vertical {
  background: #e9e8ef;
}

.noUi-target .noUi-pips .noUi-marker-horizontal {
  height: 9px;
  width: 1px;
}

.noUi-target .noUi-pips .noUi-marker-vertical {
  height: 1px;
  width: 9px;
}

.noUi-target .noUi-pips .noUi-value {
  color: #000;
  font-size: 0.94rem;
  font-weight: 600;
}

/* Slider Color variations */
.slider-primary .noUi-base .noUi-connect {
  background: #3c4876;
}

.slider-primary .noUi-base .noUi-origin {
  background: #3c4876;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle:after {
  background: #3c4876;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #3c4876;
  color: #ffffff;
}

.slider-secondary .noUi-base .noUi-connect {
  background: #dfe3e9;
}

.slider-secondary .noUi-base .noUi-origin {
  background: #dfe3e9;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle:after {
  background: #dfe3e9;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #dfe3e9;
  color: #ffffff;
}

.slider-success .noUi-base .noUi-connect {
  background: #71c016;
}

.slider-success .noUi-base .noUi-origin {
  background: #71c016;
}

.slider-success .noUi-base .noUi-origin .noUi-handle:after {
  background: #71c016;
}

.slider-success .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #71c016;
  color: #ffffff;
}

.slider-info .noUi-base .noUi-connect {
  background: #b3b4e8;
}

.slider-info .noUi-base .noUi-origin {
  background: #b3b4e8;
}

.slider-info .noUi-base .noUi-origin .noUi-handle:after {
  background: #b3b4e8;
}

.slider-info .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #b3b4e8;
  color: #ffffff;
}

.slider-warning .noUi-base .noUi-connect {
  background: #ffc100;
}

.slider-warning .noUi-base .noUi-origin {
  background: #ffc100;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle:after {
  background: #ffc100;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #ffc100;
  color: #ffffff;
}

.slider-danger .noUi-base .noUi-connect {
  background: #fc5661;
}

.slider-danger .noUi-base .noUi-origin {
  background: #fc5661;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle:after {
  background: #fc5661;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #fc5661;
  color: #ffffff;
}

.slider-light .noUi-base .noUi-connect {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin .noUi-handle:after {
  background: #f8f9fa;
}

.slider-light .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #f8f9fa;
  color: #ffffff;
}

.slider-dark .noUi-base .noUi-connect {
  background: #000000;
}

.slider-dark .noUi-base .noUi-origin {
  background: #000000;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle:after {
  background: #000000;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #000000;
  color: #ffffff;
}

/* Owl-carousel */
.owl-carousel img {
  border-radius: 4px;
}

.owl-carousel.full-width .owl-nav {
  position: absolute;
  top: 30%;
  width: 100%;
  margin-top: 0;
}

.owl-carousel.full-width .owl-nav .owl-prev,
.owl-carousel.full-width .owl-nav .owl-next {
  background: transparent;
  color: #ffffff;
}

.owl-carousel.full-width .owl-nav .owl-prev i:before,
.owl-carousel.full-width .owl-nav .owl-next i:before {
  width: 60px;
  height: 60px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 100%;
  font-size: 1.875rem;
  font-weight: bold;
  line-height: 2;
}

.owl-carousel.full-width .owl-nav .owl-prev {
  float: left;
}

.owl-carousel.full-width .owl-nav .owl-next {
  float: right;
}

.owl-carousel.full-width .owl-dots {
  margin-top: 1rem;
}

.owl-carousel .item-video {
  width: 200px;
  height: 200px;
}

/* Progressbar-js */
.progress-bar-js-line {
  height: 6px;
}

.progressbar-js-circle {
  width: 100%;
  position: relative;
}

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li:last-child a {
  border-right: 1px solid #3c4876;
  border-radius: 0px 5px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li a {
  border: 1px solid #3c4876;
  border-bottom: none;
  border-right: none;
  background: #fff;
  color: #3c4876;
  padding: 0.6em 1.3em;
  margin-right: 0;
}

.pws_tabs_container ul.pws_tabs_controll li a:hover {
  background: #fff;
  color: #3c4876;
}

.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
  background: #3c4876;
  color: #fff;
}

.pws_tabs_container .demo-tabs {
  border: 1px solid #3c4876;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  margin-bottom: 45px;
  padding-top: 3.5rem;
}


.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
  border-bottom: 1px solid #3c4876;
  border-radius: 0px 0px 0px 5px;
  border-right: 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #3c4876;
  border-right: none;
  border-bottom: none;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #3c4876;
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
  border-radius: 0px 0px 0px 5px;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
  border-radius: 0px 0px 5px 0px;
  border-right: 1px solid #3c4876;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #3c4876;
  border-top: none;
  border-right: none;
  margin-right: 0;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #3c4876;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #3c4876;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0;
}

/* Quill Editor */
.quill-container {
  height: 300px;
}

.ql-toolbar.ql-snow,
.quill-container.ql-snow {
  border-color: #e9e8ef;
}

/* Rating */
.br-theme-fontawesome-stars .br-widget a,
.br-theme-css-stars .br-widget a {
  font-size: 20px;
}

.br-theme-fontawesome-stars .br-widget a.br-selected:after, .br-theme-fontawesome-stars .br-widget a.br-active:after,
.br-theme-css-stars .br-widget a.br-selected:after,
.br-theme-css-stars .br-widget a.br-active:after {
  color: #3c4876;
}

.br-theme-bars-1to10 .br-widget a,
.br-theme-bars-movie .br-widget a,
.br-theme-bars-pill .br-widget a,
.br-theme-bars-reversed .br-widget a,
.br-theme-bars-horizontal .br-widget a {
  background-color: rgba(60, 72, 118, 0.6);
  color: #3c4876;
}

.br-theme-bars-1to10 .br-widget a.br-selected, .br-theme-bars-1to10 .br-widget a.br-active,
.br-theme-bars-movie .br-widget a.br-selected,
.br-theme-bars-movie .br-widget a.br-active,
.br-theme-bars-pill .br-widget a.br-selected,
.br-theme-bars-pill .br-widget a.br-active,
.br-theme-bars-reversed .br-widget a.br-selected,
.br-theme-bars-reversed .br-widget a.br-active,
.br-theme-bars-horizontal .br-widget a.br-selected,
.br-theme-bars-horizontal .br-widget a.br-active {
  background-color: #3c4876;
}

.br-theme-bars-square .br-widget a {
  border-color: rgba(60, 72, 118, 0.6);
  color: rgba(60, 72, 118, 0.6);
}

.br-theme-bars-square .br-widget a.br-selected, .br-theme-bars-square .br-widget a.br-active {
  border-color: #3c4876;
  color: #3c4876;
}

.br-theme-bars-movie .br-widget .br-current-rating,
.br-theme-bars-reversed .br-widget .br-current-rating,
.br-theme-bars-1to10 .br-widget .br-current-rating,
.br-theme-bars-horizontal .br-widget .br-current-rating {
  color: #000;
  font-size: 0.875rem;
  font-weight: initial;
}

.br-theme-bars-1to10 {
  height: 26px;
}

.br-theme-bars-1to10 .br-widget {
  height: 24px;
}

.br-theme-bars-1to10 .br-widget .br-current-rating {
  line-height: 1;
}

.br-theme-bars-pill .br-widget a {
  line-height: 2.5;
}

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #3c4876;
}

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #e9e8ef;
}

.select2-container--default .select2-selection--single .select2-search__field,
.select2-container--default .select2-dropdown .select2-search__field,
.select2-container--default .select2-selection--multiple .select2-search__field {
  border-color: #e9e8ef;
}

.select2-container--default .select2-selection--single {
  height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 28px;
}

.select2-container--default .select2-dropdown {
  font-size: .8125rem;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #e9e8ef;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: #ffffff;
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
  color: #ffffff;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
  background: #3c4876;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
  background: #71c016;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
  background: #b3b4e8;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
  background: #fc5661;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
  background: #ffc100;
}

/* Summernote Editor */
.note-editor.note-frame {
  border: 1px solid #e9e8ef;
}

.note-popover {
  border: 1px solid #e9e8ef;
}

/* SweetAlert */
.swal2-container {
  z-index: 1500;
}

.swal2-modal {
  min-height: 315px;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-flex-direction: column;
  flex-direction: column;
  border-radius: 10px;
}

.swal2-modal .swal2-title {
  font-size: 25px;
  line-height: 1;
  font-weight: 600;
  color: #000;
  font-weight: initial;
  margin-bottom: 0;
}

.swal2-modal .swal2-icon,
.swal2-modal .swal2-success-ring {
  margin-top: 0;
  margin-bottom: 42px;
}

.swal2-modal .swal2-buttonswrapper {
  margin-top: 0;
  padding: 0;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled {
  margin-top: 0;
  font-weight: initial;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  font-weight: initial;
  margin-top: 32px;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
  margin-top: 32px;
  border: 1px solid #e9e8ef;
  color: #ffffff;
  font-weight: initial;
}

.swal2-modal .swal2-content {
  font-size: 0.875rem;
  font-weight: 600;
  color: #000;
  font-weight: initial;
  margin-top: 11px;
}

.swal2-modal .swal2-close {
  font-size: 20px;
}

.swal2-modal .swal2-success-ring {
  left: -30px;
}

/* Switchery */
.switchery {
  width: 35px;
  height: 21px;
  border-radius: 11px;
}

.switchery > small {
  width: 20px;
  height: 20px;
}

.switchery-small {
  width: 25px;
  height: 13px;
}

.switchery-small > small {
  width: 13px;
  height: 13px;
}

.switchery-large {
  width: 50px;
  height: 28px;
  border-radius: 14px;
}

.switchery-large > small {
  width: 27px;
  height: 27px;
}

/* Tags */
div.tagsinput {
  padding: 15px 15px 10px;
  border-color: #e9e8ef;
}

div.tagsinput span.tag {
  background: #3c4876;
  border: 0;
  color: #ffffff;
  padding: 6px 14px;
  font-size: .8125rem;
  font-family: inherit;
  line-height: 1;
}

div.tagsinput span.tag a {
  color: #ffffff;
}

/* TinyMCE Editor */
.mce-tinymce.mce-panel,
.mce-tinymce .mce-panel {
  border-color: #e9e8ef;
}

/* Toast */
.jq-toast-wrap .jq-icon-success {
  background-color: #71c016;
}

.jq-toast-wrap .jq-icon-info {
  background-color: #b3b4e8;
}

.jq-toast-wrap .jq-icon-warning {
  background-color: #ffc100;
}

.jq-toast-wrap .jq-icon-error {
  background-color: #fc5661;
}

/* Typeahead */
.tt-menu,
.gist {
  text-align: left;
}

.twitter-typeahead {
  max-width: 100%;
}

.typeahead {
  background-color: #ffffff;
}

.typeahead:focus {
  border-color: #e9e8ef;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #434a54;
}

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: #ffffff;
  border: 1px solid #e9e8ef;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: #ffffff;
  background-color: #3c4876;
}

.tt-suggestion .tt-cursor {
  color: #ffffff;
  background-color: #3c4876;
}

.tt-suggestion p {
  margin: 0;
}

/* Wysi Editor */
.wysi-editor #toolbar [data-wysihtml-action] {
  float: right;
}

.wysi-editor #toolbar,
.wysi-editor textarea {
  width: 920px;
  padding: 5px;
  -webkit-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.wysi-editor textarea {
  height: 280px;
  border: 1px solid #e9e8ef;
  font-family: inherit;
  font-size: 1rem;
}

.wysi-editor textarea:focus {
  color: black;
  border: 1px solid #e9e8ef;
}

.wysi-editor .wysihtml-action-active,
.wysi-editor .wysihtml-command-active {
  font-weight: bold;
}

.wysi-editor [data-wysihtml-dialog] {
  margin: 5px 0 0;
  padding: 5px;
  border: 1px solid #666;
}

.wysi-editor a[data-wysihtml-command-value="red"] {
  color: #fc5661;
}

.wysi-editor a[data-wysihtml-command-value="green"] {
  color: #71c016;
}

.wysi-editor a[data-wysihtml-command-value="blue"] {
  color: #b3b4e8;
}

.wysi-editor .wysihtml-editor,
.wysi-editor .wysihtml-editor table td {
  outline: 1px dotted #e9e8ef;
}

.wysi-editor code {
  background: #ddd;
  padding: 10px;
  white-space: pre;
  display: block;
  margin: 1em 0;
}

.wysi-editor .toolbar {
  display: block;
  border-radius: 3px;
  border: 1px solid #fff;
  margin-bottom: 9px;
  line-height: 1em;
}

.wysi-editor .toolbar a {
  display: inline-block;
  height: 1.5em;
  border-radius: 3px;
  font-size: 1rem;
  line-height: 1.5em;
  text-decoration: none;
  background: #ffffff;
  border: 1px solid #e9e8ef;
  padding: 0 0.2em;
  margin: 1px 0;
  color: #3c4876;
}

.wysi-editor .toolbar .wysihtml-action-active,
.wysi-editor .toolbar a.wysihtml-command-active {
  background: #222;
  color: white;
}

.wysi-editor .toolbar .block {
  padding: 1px;
  display: inline-block;
  background: #eee;
  border-radius: 3px;
  margin: 0 1px 1px 0;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] {
  position: absolute;
  background: white;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] td {
  width: 10px;
  height: 5px;
  border: 1px solid #e9e8ef;
}

.wysi-editor .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
  outline: 2px solid #71c016;
}

.wysi-editor .editor-container-tag {
  padding: 5px 10px;
  position: absolute;
  color: white;
  background: rgba(0, 0, 0, 0.8);
  width: 100px;
  margin-left: -50px;
  -webkit-transition: 0.1s left, 0.1s top;
}

.wysi-editor .wrap {
  max-width: 700px;
  margin: 40px;
}

.wysi-editor .editable .wysihtml-uneditable-container {
  outline: 1px dotted #e9e8ef;
  position: relative;
}

.wysi-editor .editable .wysihtml-uneditable-container-right {
  float: right;
  width: 50%;
  margin-left: 2em;
  margin-bottom: 1em;
}

.wysi-editor .editable .wysihtml-uneditable-container-left {
  float: left;
  width: 50%;
  margin-right: 2em;
  margin-bottom: 1em;
}

/* X-editable */
.editable-form .editable {
  color: #000;
  font-size: .8125rem;
}

.editable-form .editable-click {
  border-color: #000;
}

.editable-container.editable-inline {
  max-width: 100%;
}

.editable-container.editable-inline .editableform {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group {
  max-width: 100%;
  white-space: initial;
}

.editable-container.editable-inline .editableform .control-group > div {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input input,
.editable-container.editable-inline .editableform .control-group .editable-input textarea {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .asColorPicker-input, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .dataTables_wrapper select, .dataTables_wrapper .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=text], .editable-container.editable-inline .editableform .control-group .editable-input .combodate
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=number], .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead, .editable-container.editable-inline .editableform .control-group .editable-input .combodate
.tt-query, .editable-container.editable-inline .editableform .control-group .editable-input .combodate
.tt-hint {
  padding-left: 0;
  padding-right: 0;
}

@media (max-width: 991px) {
  .editable-container.editable-inline .editableform .control-group .editable-buttons {
    display: block;
    margin-top: 10px;
  }
}

/* Wizard */
.wizard {
  display: block;
  width: 100%;
  overflow: hidden;
}

.wizard a {
  outline: 0;
}

.wizard ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.wizard ul > li {
  display: block;
  padding: 0;
}

.wizard > .steps {
  position: relative;
  display: block;
  width: 100%;
}

.wizard > .steps .current-info {
  position: absolute;
  left: -999em;
}

.wizard > .steps .number {
  font-size: 0.875rem;
}

.wizard > .steps > ul > li {
  width: 25%;
  float: left;
  text-align: center;
}

@media (max-width: 767px) {
  .wizard > .steps > ul > li {
    width: 50%;
  }
}

.wizard > .steps a {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  font-size: 0.875rem;
  font-weight: 600;
}

.wizard > .steps a:hover {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.wizard > .steps a:active {
  display: block;
  width: auto;
  margin: 0 0.5em 0.5em;
  padding: 1em;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.wizard > .steps .disabled a {
  background: #e6e9ed;
  color: #434a54;
  cursor: default;
}

.wizard > .steps .disabled a:hover {
  background: #e6e9ed;
  color: #434a54;
  cursor: default;
}

.wizard > .steps .disabled a:active {
  background: #e6e9ed e;
  color: #434a54;
  cursor: default;
}

.wizard > .steps .current a {
  background: #3c4876;
  color: #ffffff;
  cursor: default;
}

.wizard > .steps .current a:hover {
  background: #3c4876;
  color: #ffffff;
  cursor: default;
}

.wizard > .steps .current a:active {
  background: #3c4876;
  color: #ffffff;
  cursor: default;
}

.wizard > .steps .done a {
  background: #6776b1;
  color: #ffffff;
}

.wizard > .steps .done a:hover {
  background: #6776b1;
  color: #ffffff;
}

.wizard > .steps .done a:active {
  background: #6776b1;
  color: #ffffff;
}

.wizard > .steps .error a {
  background: #fc5661;
  color: #fff;
}

.wizard > .steps .error a:hover {
  background: #fc5661;
  color: #fff;
}

.wizard > .steps .error a:active {
  background: #fc5661;
  color: #fff;
}

.wizard > .content {
  background: #ffffff;
  display: block;
  margin: 0.5em;
  min-height: 24em;
  overflow: hidden;
  position: relative;
  width: auto;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #e9e8ef;
}

.wizard > .content > .title {
  position: absolute;
  left: -999em;
}

.wizard > .content > .body {
  float: left;
  position: absolute;
  width: 95%;
  height: 95%;
  padding: 2.5%;
}

.wizard > .content > .body ul {
  list-style: disc;
}

.wizard > .content > .body ul > li {
  display: list-item;
}

.wizard > .content > .body > iframe {
  border: 0 none;
  width: 100%;
  height: 100%;
}

.wizard > .content > .body input {
  display: block;
  border: 1px solid #e9e8ef;
}

.wizard > .content > .body input[type="checkbox"] {
  display: inline-block;
}

.wizard > .content > .body input.error {
  background: #fbe3e4;
  border: 1px solid #febabf;
  color: #fc5661;
}

.wizard > .content > .body label {
  display: inline-block;
  margin-bottom: 0.5em;
}

.wizard > .content > .body label.error {
  color: #fc5661;
  display: inline-block;
  margin-left: 1.5em;
}

.wizard > .actions {
  padding-top: 20px;
  position: relative;
  display: block;
  text-align: right;
  width: 100%;
}

.wizard > .actions > ul {
  display: inline-block;
  text-align: right;
}

.wizard > .actions > ul > li {
  float: left;
  margin: 0 0.5em;
}

.wizard.vertical > .steps {
  display: inline;
  float: left;
  width: 30%;
}

@media (max-width: 767px) {
  .wizard.vertical > .steps {
    width: 42%;
  }
}

.wizard.vertical > .steps > ul > li {
  float: none;
  width: 100%;
  text-align: left;
}

.wizard.vertical > .content {
  display: inline;
  float: left;
  margin: 0 2.5% 0.5em 2.5%;
  width: 65%;
}

@media (max-width: 767px) {
  .wizard.vertical > .content {
    width: 52%;
  }
}

.wizard.vertical > .actions {
  display: inline;
  float: right;
  margin: 0 2.5%;
  width: 95%;
}

@media (max-width: 767px) {
  .wizard.vertical > .actions {
    margin: 0;
    width: 100%;
  }
}

.wizard.vertical > .actions > ul > li {
  margin: 0 0 0 1em;
}

.tabcontrol {
  display: block;
  width: 100%;
  overflow: hidden;
}

.tabcontrol a {
  outline: 0;
}

.tabcontrol ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.tabcontrol ul > li {
  display: block;
  padding: 0;
}

.tabcontrol > .steps {
  position: relative;
  display: block;
  width: 100%;
}

.tabcontrol > .steps .current-info {
  position: absolute;
  left: -999em;
}

.tabcontrol > .steps > ul {
  position: relative;
  margin: 6px 0 0 0;
  top: 1px;
  z-index: 1;
}

.tabcontrol > .steps > ul > li {
  float: left;
  margin: 5px 2px 0 0;
  padding: 1px;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.tabcontrol > .steps > ul > li:hover {
  background: #edecec;
  border: 1px solid #e9e8ef;
  padding: 0;
}

.tabcontrol > .steps > ul > li > a {
  color: #d3d3d3;
  display: inline-block;
  border: 0 none;
  margin: 0;
  padding: 10px 30px;
  text-decoration: none;
}

.tabcontrol > .steps > ul > li > a:hover {
  text-decoration: none;
}

.tabcontrol > .steps > ul > li.current {
  background: #ffffff;
  border: 1px solid #e9e8ef;
  border-bottom: 0 none;
  padding: 0 0 1px 0;
  margin-top: 0;
}

.tabcontrol > .steps > ul > li.current > a {
  padding: 15px 30px 10px 30px;
}

.tabcontrol > .content {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 35em;
  overflow: hidden;
  border-top: 1px solid #e9e8ef;
  padding-top: 20px;
}

.tabcontrol > .content > .title {
  position: absolute;
  left: -999em;
}

.tabcontrol > .content > .body {
  float: left;
  position: absolute;
  width: 95%;
  height: 95%;
  padding: 2.5%;
}

.tabcontrol > .content > .body ul {
  list-style: disc;
}

.tabcontrol > .content > .body ul > li {
  display: list-item;
}

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Auth */
.auth .login-half-bg {
  background: url("../../images/auth/<?= back_photo('login') ?>");
  background-size: cover;
}

.auth .register-half-bg {
  background: url("../../images/auth/register-bg.jpg");
  background-size: cover;
}

.auth.lock-full-bg {
  background: url("../../images/auth/lockscreen-bg.html");
  background-size: cover;
}

.auth .lock-profile-img {
  width: 90px;
  height: 90px;
  border-radius: 100%;
}

.auth .auth-form-light {
  background: #ffffff;
}

.auth .auth-form-light select {
  color: #c9c8c8;
}

.auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .asColorPicker-wrap .form-control:focus, .auth .auth-form-light .input-group .asColorPicker-input:focus, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:focus, .auth .auth-form-light .input-group .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input[type=text]:focus, .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input[type=text]:focus, .auth .auth-form-light .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input[type=number]:focus, .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input[type=number]:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus, .auth .auth-form-light .asColorPicker-wrap .typeahead:focus, .auth .auth-form-light .input-group
.tt-query:focus, .auth .auth-form-light .asColorPicker-wrap
.tt-query:focus, .auth .auth-form-light .input-group
.tt-hint:focus, .auth .auth-form-light .asColorPicker-wrap
.tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .asColorPicker-wrap .form-control:active, .auth .auth-form-light .input-group .asColorPicker-input:active, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:active, .auth .auth-form-light .input-group .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input[type=text]:active, .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input[type=text]:active, .auth .auth-form-light .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select:active,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select:active,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input[type=number]:active, .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input[type=number]:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active, .auth .auth-form-light .asColorPicker-wrap .typeahead:active, .auth .auth-form-light .input-group
.tt-query:active, .auth .auth-form-light .asColorPicker-wrap
.tt-query:active, .auth .auth-form-light .input-group
.tt-hint:active, .auth .auth-form-light .asColorPicker-wrap
.tt-hint:active {
  border-color: #e9e8ef;
}

.auth .auth-form-transparent {
  background: transparent;
}

.auth .auth-form-transparent .form-control, .auth .auth-form-transparent .asColorPicker-input, .auth .auth-form-transparent .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text], .auth .auth-form-transparent
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead, .auth .auth-form-transparent
.tt-query, .auth .auth-form-transparent
.tt-hint,
.auth .auth-form-transparent .input-group-text {
  border-color: #dfe3e9;
}

.auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .asColorPicker-input:focus, .auth .auth-form-transparent .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text]:focus, .auth .auth-form-transparent
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number]:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus, .auth .auth-form-transparent
.tt-query:focus, .auth .auth-form-transparent
.tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .asColorPicker-input:active, .auth .auth-form-transparent .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text]:active, .auth .auth-form-transparent
.jsgrid .jsgrid-table .jsgrid-filter-row select:active,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number]:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active, .auth .auth-form-transparent
.tt-query:active, .auth .auth-form-transparent
.tt-hint:active,
.auth .auth-form-transparent .input-group-text:focus,
.auth .auth-form-transparent .input-group-text:active {
  border-color: #dfe3e9;
}

.auth .auth-form-transparent select {
  outline-color: #dfe3e9;
}

.auth.auth-img-bg {
  padding: 0;
}

@media (min-width: 768px) {
  .auth.auth-img-bg .auth-form-transparent {
    width: 55%;
    margin: auto;
  }
}

.auth .brand-logo {
  margin-bottom: 2rem;
}

.auth .brand-logo img {
  width: 150px;
}

.auth form .form-group {
  margin-bottom: 1.5rem;
}

.auth form .form-group label {
  font-size: .8125rem;
}

.auth form .form-group .form-control, .auth form .form-group .asColorPicker-input, .auth form .form-group .dataTables_wrapper select, .dataTables_wrapper .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=text], .auth form .form-group
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=number], .auth form .form-group .select2-container--default .select2-selection--single, .select2-container--default .auth form .form-group .select2-selection--single, .auth form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth form .form-group .select2-search__field, .auth form .form-group .typeahead, .auth form .form-group
.tt-query, .auth form .form-group
.tt-hint {
  background: transparent;
  border-radius: 0;
  font-size: .9375rem;
}

.auth form .auth-form-btn {
  height: 50px;
  line-height: 1.5;
}

.auth form .auth-link {
  font-size: 0.875rem;
}

.auth form .auth-link:hover {
  color: initial;
}

.page-body-wrapper {
  min-height: calc(100vh - 69px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  padding-right: 0;
  padding-top: 69px;
}

.page-body-wrapper.full-page-wrapper {
  width: 100%;
  min-height: 100vh;
  padding-top: 0;
}

.main-panel {
  transition: width 0.25s ease, margin 0.25s ease;
  width: calc(100% - 220px);
  min-height: calc(100vh - 69px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
}

@media (max-width: 991px) {
  .main-panel {
    margin-left: 0;
    width: 100%;
  }
}

.content-wrapper {
  background: #F7F7FA;
  padding: 1.5rem;
  width: 100%;
  -webkit-flex-grow: 1;
  flex-grow: 1;
}

/* Sidebar */
.sidebar {
	min-height: calc(100vh - 69px);
	background: #fff;
	font-family: 'Fira Sans', sans-serif;
	font-weight: 300;
	padding: 0;
	width: 260px;
	z-index: 11;
	transition: width 0.25s ease, background 0.25s ease;
	  -webkit-transition: width 0.25s ease, background 0.25s ease;
	-moz-transition: width 0.25s ease, background 0.25s ease;
	-ms-transition: width 0.25s ease, background 0.25s ease;
	box-shadow: 6px 16px 31px -18px #b7bcd1;
	-webkit-box-shadow: 6px 16px 31px -18px #b7bcd1;
	-moz-box-shadow: 6px 16px 31px -18px #b7bcd1;
	-ms-box-shadow: 6px 16px 31px -18px #b7bcd1;
	border-right: 1px solid #e9e8ef;
}

.sidebar .nav {
  overflow: hidden;
  flex-wrap: nowrap;
  flex-direction: column;
  margin: 0 0 10px 15px;
}

.sidebar .nav .sidebar-category {
  font-weight: 400;
  color: #9b9b9b;
  margin: 2.2rem 1.25rem 0 1.25rem;
}

.sidebar .nav .sidebar-category:hover > .nav-link {
  background: #ffffff;
}

.sidebar .nav .nav-item {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  transition-property: background;
  -webkit-transition-property: background;
}

.sidebar .nav .nav-item .collapse {
  z-index: 999;
}

.sidebar .nav .nav-item .nav-link {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  white-space: nowrap;
  padding: 0.7rem 0.8rem;
  color: #686868;
  border-radius: 0px;
  -webkit-transition-duration: 0.45s;
  -moz-transition-duration: 0.45s;
  -o-transition-duration: 0.45s;
  transition-duration: 0.45s;
  transition-property: color;
  -webkit-transition-property: color;
}

.sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar .nav .nav-item .nav-link i.menu-icon {
  font-size: 0.9rem;
  line-height: 1;
  margin-right: 0.7rem;
  color: #678098;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
  margin-left: 2rem;
  margin-right: 0;
}

.sidebar .nav .nav-item .nav-link i.menu-icon:before {
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow {
  display: inline-block;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  margin-right: 0;
  color: #000;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow:before {
  content: "\F140";
  font-family: "Material Design Icons";
  font-style: normal;
  display: block;
  font-size: 1rem;
  line-height: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.sidebar .nav .nav-item .nav-link .menu-title {
  color: #6c7379;
  display: inline-block;
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1;
  vertical-align: middle;
  margin-top: 0.2rem;
  font-family: 'Fira Sans', sans-serif;
}

.sidebar .nav .nav-item .nav-link .badge {
  margin-left: auto;
}

.rtl .sidebar .nav .nav-item .nav-link .badge {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link[aria-expanded="true"] i.menu-arrow:before {
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.sidebar .nav .nav-item.active > .nav-link {
  background: #f2f6f9;
  position: relative;
}

.sidebar .nav .nav-item.active > .nav-link i,
.sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar .nav .nav-item.active > .nav-link .menu-arrow {
  color: #5b9bd1;
}

.sidebar .nav:not(.sub-menu) {
  margin-top: .9rem;
  background: #fff;
}

.sidebar .nav:not(.sub-menu) > .nav-item {
  margin-top: 0rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link {
  margin: 0;
}
.sidebar .nav:not(.sub-menu) > .nav-item.active > .nav-link {
  margin: 0;
  padding: 0.7rem 0.8rem 0.7rem 0.6rem;
  border-left: 3px solid #5C9ACF!important;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: #F7F7FA;
  color: #56595a;
}

.sidebar .nav:not(.sub-menu) > .nav-item.active {
  background: #f2f6f9;
  color: #08279c;
  border-radius: 0px;
}

.sidebar .nav.sub-menu {
  margin: 0;
  list-style: none;
  padding: 0.25rem 0 0 0.8rem;
}

.sidebar .nav.sub-menu .nav-item {
  padding: 0;
}

.sidebar .nav.sub-menu .nav-item .nav-link {
  color: #656565;
  padding: 0.6rem 1.6rem;
  position: relative;
  font-size: 0.9rem;
  line-height: 1;
  height: auto;
  border-top: 0;
}

.sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #000;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #000;
  background: transparent;
}

.sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

.sidebar-dark .sidebar {
  background: #282f3a;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-icon {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link {
  background: initial;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar-dark .sidebar .nav .nav-item.active > .nav-link i {
  color: #c0bbbb;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: #59606b;
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:before {
  color: #e9e9e9;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #c0bbbb;
  background: transparent;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #9a94a7;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

/* style for off-canvas menu*/
@media screen and (max-width: 991px) {
  .sidebar-offcanvas {
    position: fixed;
    max-height: calc(100vh - 69px);
    top: 69px;
    bottom: 0;
    overflow: auto;
    right: -260px;
    -webkit-transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
  .sidebar-offcanvas.active {
    right: 0;
  }
}

/* Navbar */
.navbar {
  font-weight: 400;
  transition: background 0.25s ease;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  /* Navbar color variations */
}

.navbar .navbar-brand-wrapper {
  background: #ffffff;
  border-right: 1px solid #e9e8ef;
  border-bottom: 1px solid #e9e8ef;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  width: 255px;
  height: 69px;
}

.sidebar-dark .navbar .navbar-brand-wrapper {
  background: #282f3a;
  border-bottom: 1px solid #5e626a;
}

.navbar .navbar-brand-wrapper .navbar-brand {
  color: #a9afce;
  font-size: 1.2rem;
  margin-right: 0;
      font-weight: bold;
  padding: .25rem 0;
}

.navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
  display: none;
}

.navbar .navbar-brand-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand:hover {
  color: #1b2658;
}

.navbar .navbar-brand-wrapper .navbar-brand img {
  max-width: 100%;
  height: 1.5rem;
  width: 7.187rem;
  margin: auto;
  vertical-align: middle;
}

.navbar .navbar-brand-wrapper .brand-logo-mini {
  padding-left: 0;
  text-align: center;
}

.navbar .navbar-brand-wrapper .brand-logo-mini img {
  width: calc(70px - 30px);
  max-width: 100%;
  margin: auto;
  height: auto;
}

.navbar .navbar-menu-wrapper {
  background: #ffffff;
  transition: width 0.25s ease;
  -webkit-transition: width 0.25s ease;
  -moz-transition: width 0.25s ease;
  -ms-transition: width 0.25s ease;
  color: #9b9b9b;
  padding-left: 1.4rem;
  padding-right: 1.4rem;
  width: calc(100% - 255px);
  height: 69px;
  border-bottom: 1px solid #e9e8ef;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper {
    width: calc(100% - 55px);
    padding-left: 15px;
    padding-right: 15px;
  }
}

.navbar .navbar-menu-wrapper .navbar-toggler {
  border: 0;
  color: #3c4876;
  font-size: 1.5rem;
  padding: 0;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
    display: none;
  }
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
    padding-left: 15px;
    padding-right: 11px;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item {
  margin-left: 1rem;
  margin-right: 1rem;
}

@media (max-width: 767px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item {
    margin-left: 0.49rem;
    margin-right: 0.49rem;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
  color: #9b9b9b;
  font-size: 1rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search {
  margin-left: 2rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(255, 255, 255, 0.13);
  border-radius: 4px;
  padding: .75rem;
  width: 15.31rem;
  height: 2.5rem;
  border: 1px solid #e9e8ef;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text {
  background: transparent;
  border: 0;
  color: #9b9b9b;
  padding: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  font-size: 18px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number], .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint {
  margin-left: .5rem;
  color: #000;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint::-webkit-input-placeholder {
  font-weight: 600;
  color: #9b9b9b;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint:-moz-placeholder {
  font-weight: 600;
  color: #9b9b9b;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint::-moz-placeholder {
  font-weight: 600;
  color: #9b9b9b;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=text]:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=text]:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder,
.jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group input[type=number]:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap input[type=number]:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-query:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-query:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group
.tt-hint:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap
.tt-hint:-ms-input-placeholder {
  font-weight: 600;
  color: #9b9b9b;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
  border-left: 1px solid rgba(255, 255, 255, 0.24);
  margin: 0;
  padding-left: 1.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings .nav-link {
  padding: 0;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings i {
  font-size: 1.5rem;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile img {
  width: 40px;
  height: 40px;
  border-radius: 9px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
  margin-left: .5rem;
}

@media (max-width: 767px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
    display: none;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile a.dropdown-toggle::after {
  color: #9b9b9b;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  border: none;
  -webkit-box-shadow: 0px 10px 21px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 10px 21px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 10px 21px 0px rgba(0, 0, 0, 0.1);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  position: absolute;
  font-size: 0.9rem;
  margin-top: 0.34rem;
  right: 0;
  left: auto;
  top: 3.89rem;
  min-width: 8.125rem;
  border: 1px solid #e9e8ef;
  padding-bottom: 0.937rem;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  right: auto;
  left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  margin-bottom: 0;
  padding: 0.4rem 0.8rem;
  cursor: pointer;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  font-size: 14px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis span {
  font-size: 0.875rem;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  margin-left: 10px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 0;
  margin-right: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
  margin-right: .5rem;
  vertical-align: middle;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
    position: static;
  }
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
    left: 20px;
    right: 20px;
    top: 69px;
    width: calc(100% - 40px);
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator {
  position: relative;
  padding: 0;
  text-align: center;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 3.125rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator i {
  font-size: 1.125rem;
  margin-right: 0;
  vertical-align: middle;
  padding: 0.25rem .77rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator i:hover {
  color: #3c4876;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count {
  position: absolute;
  left: 50%;
  width: 4px;
  height: 4px;
  border-radius: 100%;
  background: #3c4876;
  top: .25rem;
  transform: translate(-50%, 0);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator:after {
  display: none;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator:hover {
  background: rgba(77, 131, 255, 0.07);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator[aria-expanded="true"] {
  background: rgba(77, 131, 255, 0.07);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator[aria-expanded="true"] i {
  color: #3c4876;
}

@media (min-width: 992px) {
  .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: auto;
  }
  .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: 0;
    margin-right: auto;
  }
}

.navbar.navbar-primary .navbar-menu-wrapper {
  background: #3c4876;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-secondary .navbar-menu-wrapper {
  background: #dfe3e9;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-success .navbar-menu-wrapper {
  background: #71c016;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-info .navbar-menu-wrapper {
  background: #b3b4e8;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-warning .navbar-menu-wrapper {
  background: #ffc100;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-danger .navbar-menu-wrapper {
  background: #fc5661;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #f8f9fa;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  background: #000000;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #5e597f;
}

.navbar.navbar-primary .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #b3b4e8;
}

@media (max-width: 991px) {
  .navbar {
    flex-direction: row;
  }
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
    display: none;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
    display: inline-block;
  }
  .navbar-collapse {
    display: flex;
    margin-top: 0.5rem;
  }
}

@media (max-width: 480px) {
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .brand-logo-mini {
    padding-top: 0px;
  }
}

/* Layouts */
@media (min-width: 992px) {
  .sidebar-mini .navbar .navbar-brand-wrapper {
    width: 185px;
  }
  .sidebar-mini .navbar .navbar-menu-wrapper {
    width: calc(100% - 185px);
  }
  .sidebar-mini .sidebar {
    width: 185px;
  }
  .sidebar-mini .sidebar .nav .nav-item {
    padding: 0;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    border-bottom: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-title {
    display: block;
    margin: auto;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .badge {
    margin-left: 5px;
    display: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-icon {
    display: block;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: .625rem;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: inline-block;
    margin-left: 5px;
    position: absolute;
    top: 50%;
    right: 20px;
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  .sidebar-mini .main-panel {
    width: calc(100% - 185px);
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu {
    padding: 0;
    border-top: none;
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu .nav-item .nav-link {
    padding: .75rem 0 .75rem 1.5rem;
    margin-left: auto;
    margin-right: auto;
    display: block;
    text-align: left;
    width: 66%;
  }
}

.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
  display: block;
  padding: .5rem 0;
  background: #ffffff;
}

@media (min-width: 992px) {
  .sidebar-icon-only .navbar .navbar-brand-wrapper {
    width: 70px;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo {
    display: none;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo-mini {
    display: inline-block;
  }
  .sidebar-icon-only .navbar .navbar-menu-wrapper {
    width: calc(100% - 70px);
  }
  .sidebar-icon-only .sidebar {
    width: 70px;
  }
  .sidebar-icon-only .sidebar .nav {
    overflow: visible;
    margin: 0;
  }
  .sidebar-icon-only .sidebar .nav .sidebar-category {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item {
    position: relative;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
    display: block;
    padding-left: .5rem;
    padding-right: .5rem;
    text-align: center;
    position: static;
    border-radius: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 0 5px 5px 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 5px 0 0 5px;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 0 5px 0 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 5px 0 0 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .collapse {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: #ffffff;
    padding: 0.5rem 1.4rem;
    left: 70px;
    position: absolute;
    text-align: left;
    top: -0.313rem;
    bottom: 0;
    width: 190px;
    z-index: 1;
    line-height: 1.8;
    box-shadow: 4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    background: #282f3a;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    left: auto;
    right: 70px;
    text-align: left;
    box-shadow: -4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    color: #ffffff;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #ffffff;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #282f3a;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    display: block;
    padding: .5rem 0;
    background: #ffffff;
    border-radius: 0 0 5px 0;
    position: absolute;
    left: 70px;
    width: 190px;
    box-shadow: 4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    background: #282f3a;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    left: auto;
    right: 70px;
    border-radius: 0 0 0 5px;
    box-shadow: -4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-icon-only .sidebar .nav.sub-menu {
    padding: 0 0 0 1.5rem;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
    text-align: left;
    padding-left: 20px;
  }
  .sidebar-icon-only .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
    border-radius: 0;
  }
  .sidebar-icon-only .sidebar .nav:not(.sub-menu) > .nav-item.active {
    border-radius: 0;
  }
  .sidebar-icon-only .main-panel {
    width: calc(100% - 70px);
  }
}

@media (min-width: 992px) {
  .sidebar-hidden .sidebar {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    width: 0;
  }
  .sidebar-hidden .main-panel {
    width: 100%;
  }
}

@media (min-width: 992px) {
  .sidebar-absolute .page-body-wrapper {
    position: relative;
  }
  .sidebar-absolute .page-body-wrapper .sidebar {
    transition: none;
  }
  .sidebar-absolute:not(.sidebar-hidden) .sidebar {
    position: absolute;
    height: 100%;
    -webkit-box-shadow: 0 0 3px 1px #a7a3a3;
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 0 0 3px 1px #a7a3a3;
    /* Firefox 3.5 - 3.6 */
    box-shadow: 0 0 3px 1px #a7a3a3;
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  }
  .sidebar-absolute .main-panel {
    width: 100%;
    transition: none;
  }
}

@media (min-width: 992px) {
  .sidebar-fixed .sidebar {
    position: fixed;
    max-height: auto;
  }
  .sidebar-fixed .sidebar .nav {
    max-height: calc(100vh - 69px);
    overflow: auto;
    position: relative;
  }
  .sidebar-fixed .sidebar .nav.sub-menu {
    max-height: none;
  }
  .sidebar-fixed .main-panel {
    margin-left: 220px;
  }
  .sidebar-fixed.sidebar-icon-only .main-panel {
    margin-left: 70px;
  }
}

@media (min-width: 992px) {
  .boxed-layout .container-scroller {
    background: #c6c8ca;
    padding: 0 calc((100% - 1200px) / 2);
  }
  .boxed-layout .navbar.fixed-top {
    margin: auto;
    max-width: 1200px;
  }
}

.rtl {
  direction: rtl;
  text-align: right;
}

.rtl .sidebar .nav {
  padding-right: 0;
}

.rtl .sidebar .nav.sub-menu {
  padding: 0 4.5rem 0 0;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu {
  padding-right: 0rem;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link {
  padding-right: 3rem;
  text-align: right;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link:before {
  right: 1.75rem;
}

.rtl .product-chart-wrapper::-webkit-scrollbar,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
.rtl .sidebar-fixed .nav::-webkit-scrollbar,
.rtl .table-responsive::-webkit-scrollbar,
.rtl ul.chats::-webkit-scrollbar {
  width: 0.5em;
}

.rtl .product-chart-wrapper::-webkit-scrollbar-track,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
.rtl .table-responsive::-webkit-scrollbar-track,
.rtl ul.chats::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
.rtl .table-responsive::-webkit-scrollbar-thumb,
.rtl ul.chats::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}

/* Settings Panel */
.settings-panel {
  border-left: 1px solid #e9e8ef;
  display: block;
  position: fixed;
  top: 69px;
  right: -300px;
  bottom: 0;
  width: 300px;
  height: 100vh;
  min-height: 100%;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-property: right, box-shadow;
  -moz-transition-property: right, box-shadow;
  -o-transition-property: right, box-shadow;
  transition-property: right, box-shadow;
  z-index: 9999;
}

.settings-panel .nav-tabs {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  width: auto;
  margin: 0;
  padding: 0;
  background: #ffffff;
}

.settings-panel .nav-tabs .nav-item {
  border: none;
}

.settings-panel .nav-tabs .nav-item .nav-link {
  background: transparent;
  text-align: center;
  border: none;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  color: #000;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
  transition-property: color;
  -webkit-transition-property: color;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .nav-tabs .nav-item .nav-link.active {
  background: transparent;
  color: #3c4876;
}

.settings-panel .tab-content {
  border: none;
  padding: 20px 0 0px 0;
}

.settings-panel .tab-content .tab-pane.scroll-wrapper {
  position: relative;
  max-height: 100vh;
  height: 100%;
  padding-bottom: 150px;
}

.settings-panel .settings-heading {
  padding: 16px 0 13px 35px;
  font-size: 0.875rem;
  font-family: 'Fira Sans', sans-serif;
  font-weight: 500;
  line-height: 1;
  color: rgba(0, 0, 0, 0.9);
  opacity: 0.9;
  margin-bottom: 0;
  border-top: 1px solid #e9e8ef;
  border-bottom: 1px solid #e9e8ef;
}

.rtl .settings-panel .settings-heading {
  padding: 16px 35px 13px 0;
  text-align: right;
}

.rtl .settings-panel small.settings-heading {
  padding: 16px 0 13px 12px;
}

.settings-panel .sidebar-bg-options {
  padding: 13px 35px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  font-size: 0.875rem;
  line-height: 1;
  color: #595959;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-property: background;
  -moz-transition-property: background;
  -o-transition-property: background;
  transition-property: background;
}

.settings-panel .sidebar-bg-options.selected {
  background: #e6e9ed;
}

.settings-panel .color-tiles {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0px 35px 10px 35px;
  padding-top: 15px;
}

.settings-panel .color-tiles .tiles {
  margin: 10px 18px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .color-tiles .tiles:before {
  content: "";
  width: 0px;
  height: 0px;
  opacity: 0;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 100%;
  border: 0;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
}

.settings-panel .color-tiles .tiles.selected:before {
  width: 10px;
  height: 10px;
  opacity: 1;
  border-width: 1px;
}

.settings-panel .color-tiles .tiles.default {
  background: #ffffff;
  border: 1px solid #e2e4e7;
}

.settings-panel .chat-list {
  padding-left: 0;
}

.settings-panel .chat-list .list {
  padding: 0.4rem 0.8rem;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  border-bottom: 1px solid #e9e8ef;
}

.settings-panel .chat-list .list:last-child {
  border-bottom: none;
}

.settings-panel .chat-list .list .profile {
  position: relative;
  margin-right: 1rem;
}

.settings-panel .chat-list .list .profile img {
  width: 2.50rem;
  height: 2.50rem;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span {
  height: 0.75rem;
  width: 0.75rem;
  position: absolute;
  bottom: 0.34rem;
  right: 0;
  border: 0.13rem solid #ffffff;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span.online {
  background: #71c016;
}

.settings-panel .chat-list .list .profile span.offline {
  background: #ffc100;
}

.settings-panel .chat-list .list .info {
  margin-right: auto;
}

.settings-panel .chat-list .list .info p {
  display: block;
  margin-bottom: 0;
}

.settings-panel .chat-list .list .info p:last-child {
  opacity: 0.5;
  font-size: 0.8rem;
}

.rtl .settings-panel .chat-list .list .info p:last-child {
  text-align: right;
}

.settings-panel .chat-list .list.active {
  background: #f8f9fa;
}

.settings-panel.open {
  right: 0;
}

.settings-panel .settings-close {
  position: absolute;
  top: 16px;
  right: 10px;
  color: #3c4876;
  background: transparent;
  border-radius: 4px;
  padding: 0 3px;
  cursor: pointer;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
  z-index: 999;
}

.settings-panel .settings-close:hover {
  background: rgba(255, 255, 255, 0.3);
}

.rtl .settings-panel .settings-close {
  right: unset;
  left: 10px;
}

.settings-panel .events p {
  font-family: 'Fira Sans', sans-serif;
  font-weight: 400;
}

.rtl .settings-panel .events p {
  text-align: right;
}

.rtl .settings-panel {
  right: unset;
  left: -300px;
  -webkit-transition-property: left;
  -moz-transition-property: left;
  -o-transition-property: left;
  transition-property: left;
}

.rtl .settings-panel .chat-list {
  padding-right: 0;
}

.rtl .settings-panel .chat-list .list .profile {
  margin-right: 0;
  margin-left: 1rem;
}

.rtl .settings-panel .chat-list .list .info {
  margin-right: 0;
  margin-left: auto;
}

.rtl .settings-panel .chat-list .list .info .badge {
  margin-right: 10px;
}

.rtl .settings-panel.open {
  left: 0;
  right: unset;
}

#theme-settings .settings-close {
  top: 12px;
  background: transparent;
}

#settings-trigger {
  position: fixed;
  bottom: 40px;
  right: 30px;
  height: 45px;
  width: 45px;
  background: #f0f0fa;
  border: 2px solid #e6eeff;
  z-index: 99;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  border-radius: 100%;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  -ms-animation-delay: 1s;
  -o-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

#settings-trigger i {
  color: #ffffff;
  font-size: 1rem;
  line-height: 1rem;
}

.rtl #settings-trigger {
  right: auto;
  left: 30px;
}

/*@media (max-width: 991px) {
  #settings-trigger {
    display: none;
  }
}*/

.icon-orta{
	vertical-align: sub;
}
.renk1{
	background: #f0f0fa;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #F44336;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #8BC34A;
}

input:focus + .slider {
  box-shadow: 0 0 1px #8BC34A;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.page-header {
    border: 0;
    margin: 0;
    *zoom: 1
}

.page-header:before,
.page-header:after {
    display: table;
    content: "";
    line-height: 0
}

.page-header:after {
    clear: both
}

.page-title {
    float: left;
    margin-bottom: 35px;
}

.page-title h3 {
    margin: 0;
    margin-bottom: 10px;
    font-size: 20px;
    color: #1f212d;
    font-weight: 600;
}

.page-title span {
    display: block;
    font-size: 11px;
    color: #888;
    font-weight: normal
}
.crumbs .breadcrumb {
    display: inline-flex;
    padding: 8px;
    background-color: #f2f6f9;
}
.crumbs .breadcrumb li {
    font-size: 12px
}
.crumbs .breadcrumb li a {
    color: #555;
	font-size: 15px;
}
.crumbs .breadcrumb li a:hover {
    text-decoration: none;
    color: #4d7496
}
.crumbs .breadcrumb li i {
    color: #6f6f6f;
    padding: 0 3px;
    margin-top: 2px;
    font-size: 13px;
    vertical-align: text-bottom;
}
.crumbs .breadcrumb li.active a {
    color: #949494!important;
	font-size: 15px;
}
.crumbs .crumb-buttons {
    list-style: none;
    margin-right: 21px;
    margin-left: 0;
    height: 0
}
.crumbs .crumb-buttons > li {
    font-size: 12px;
    border-right: 1px solid #d9d9d9;
    position: relative
}
.crumbs .crumb-buttons > li:first-child,
.crumbs .crumb-buttons > li.first {
    border-left: 1px solid #d9d9d9
}
.crumbs .crumb-buttons > li > a {
    color: #555;
    text-decoration: none;
    white-space: nowrap;
    padding: 0 10px;
    line-height: 39px;
    display: inline-block;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff
}
.crumbs .crumb-buttons > li > a:hover {
    background: #fff
}
.crumbs .crumb-buttons > li > a:active {
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
    background: #ebebeb
}
.crumbs .crumb-buttons > li > i,
.crumbs .crumb-buttons > li > a > i {
    padding-right: 5px
}
.crumbs .crumb-buttons > li > i.left-padding,
.crumbs .crumb-buttons > li > a > i.left-padding {
    padding-right: 0;
    padding-left: 5px
}
.crumbs .crumb-buttons >li.open {
    background: #fff
}
.breadcrumb > li+li:before {
	font: normal normal normal 22px "Material Design Icons";
    content: "\F142";
    display: inline-block;
    padding-right: .2rem;
    padding-left: .2rem;
    color: #000000;
    vertical-align: sub;
}
.checkbox-custom,.radio-custom{
    opacity:0;
    position:absolute
}
 .checkbox-custom,.checkbox-custom-label,.radio-custom,.radio-custom-label{
    display:inline-block;
    vertical-align:middle;
    cursor:pointer
}
 .checkbox-custom-label,.radio-custom-label{
    position:relative
}
 .checkbox-custom + .checkbox-custom-label:before,.radio-custom + .radio-custom-label:before{
    content:'';
    background:#67262600;
	border: solid #3c4876;
    border-width: 2px;
    display:inline-block;
    line-height:20px;
    vertical-align:middle;
    width:18px;
    height:18px;
    text-align:center;
	border-radius: 2px;
	font-size: 15px;
}
 .checkbox-custom:checked + .checkbox-custom-label:before{
    content: '\F12C';
    font-family: Material Design Icons;
    background:#3c4876;
	border-width: 0;
    color:#fff
}
 .radio-custom + .radio-custom-label:before{
    border-radius:50%
}
.font-12{
	font-size:12px !important;
}
.font-13{
	font-size:13px !important;
}
.min-width-full{
	  min-width: -webkit-fill-available !important;
}
.cursor-pointer{
	cursor:pointer !important;
}
.dd {
     position: relative;
     display: block;
     margin: 0;
     padding: 0;
     list-style: none;
     font-size: 13px;
     line-height: 20px;
}
 .dd-list {
     display: block;
     position: relative;
     margin: 0;
     padding: 0;
     list-style: none;
}
 .dd-list .dd-list {
     padding-left: 30px;
}
 .dd-collapsed .dd-list {
     display: none;
}
 .dd-item, .dd-empty, .dd-placeholder {
     display: block;
     position: relative;
     margin: 0;
     padding: 0;
     min-height: 20px;
     font-size: 13px;
     line-height: 20px;
}
 .dd-handle {
     display: block;
     height: 32px;
     margin: 5px 0;
     padding: 5px 10px;
     color: #333;
     text-decoration: none;
     font-weight: bold;
     border: 1px solid #ccc;
     background: #fafafa;
     -moz-box-sizing: border-box;
     -webkit-box-sizing: border-box;
     box-sizing: border-box;
     line-height: 22px;
}
 .dd-handle:hover {
     color: #2ea8e5;
     background: #fff;
}
 .dd-item > button {
     display: block;
     position: relative;
     cursor: pointer;
     float: left;
     width: 25px;
     height: 20px;
     margin: 6px 0;
     padding: 0;
     text-indent: 100%;
     white-space: nowrap;
     overflow: hidden;
     border: 0;
     background: transparent;
     font-size: 18px;
     line-height: 1;
     text-align: center;
     font-weight: bold;
}
 .dd-item > button:before {
     content: '+';
     display: block;
     position: absolute;
     width: 100%;
     text-align: center;
     text-indent: 0;
}
 .dd-item > button[data-action="collapse"]:before {
     content: '-';
}
 .dd-placeholder, .dd-empty {
     margin: 5px 0;
     padding: 0;
     min-height: 30px;
     background: #f2fbff;
     border: 1px dashed #b6bcbf;
     -moz-box-sizing: border-box;
     -webkit-box-sizing: border-box;
     box-sizing: border-box;
}
 .dd-empty {
     border: 1px dashed #bbb;
     min-height: 100px;
     background-color: #e5e5e5;
     background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
     background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
     background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
     -ms-background-size: 60px 60px;
     background-size: 60px 60px;
     background-position: 0 0, 30px 30px;
}
 .dd-dragel {
     position: absolute;
     pointer-events: none;
     z-index: 9999;
}
 .dd-dragel > .dd-item .dd-handle {
     margin-top: 0;
}
 .dd-dragel .dd-handle {
     -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
     -ms-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
     box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
}
/** * Nestable Extras */
 .nestable-lists {
     display: block;
     clear: both;
     padding: 30px 0;
     width: 100%;
     border: 0;
     border-top: 2px solid #ddd;
     border-bottom: 2px solid #ddd;
}
 #nestable-menu {
     padding: 0;
     margin: 20px 0;
}
 .nestable-dark-theme .dd-handle {
     color: #fff;
     border: 1px solid #999;
     background: #bbb;
}
 .nestable-dark-theme .dd-handle:hover {
     background: #bbb;
}
 .nestable-dark-theme .dd-item > button:before {
     color: #fff;
}
 @media only screen and (min-width: 700px) {
     .dd {
         float: left;
         width: 100%;
    }
     .dd + .dd {
         margin-left: 2%;
    }
}
 .dd-hover > .dd-handle {
     background: #2ea8e5 !important;
}
/** * Nestable Draggable Handles */
 .dd3-content {
     display: block;
     margin: 7px;
     padding: 5px 10px 5px 40px;
     color: #333;
     text-decoration: none;
     font-weight: bold;
     border: 1px solid #ccc;
     background: #f0f0f0;
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
     cursor: default;
}
 .dd3-content:hover {
     color: #2ea8e5;
}
 .dd-dragel > .dd3-item > .dd3-content {
     margin: 0;
}
 .dd3-item > button {
     margin-left: 36px;
}
 .dd3-handle {
     position: absolute;
     margin: 0;
     left: 0;
     top: 0;
     width: 36px;
     white-space: nowrap;
     overflow: hidden;
     border: 1px solid #f7f7fa;
     background: #f7f7fa;
	 text-align:center;
}
 .dd3-handle:hover {
     background: #f7f7fa;
}
.nestablebtns{
    float:right;
    position:absolute;
    z-index:22;
    right:10px;
    top:7px;
    font-size:15px
}
 .nestablebtns a{
    margin-left:5px;
    color:#8d8d8d
}
 .nestablebtns a:hover{
    color:#000;
	text-decoration:none;
}
.hidden {
    display: none!important;
}
.aktif-menu{
	background:#E3F2D0 !important;
	color: #71c016 !important;
	border-color: rgba(113, 192, 22, 0) !important;
}
.pasif-menu{
	background:#F8D7DB !important;
	color: #fc5661 !important;
	border-color: rgba(252, 86, 97, 0) !important;
}
.min-150{
	min-height:150px !important;
}
.min-200{
	min-height:200px !important;
}
.green-info {
    display: inline-block;
    width: 100%;
    color: #4caf50;
    border: 1px solid #4caf50;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 10px;
}
.green-info i {
    float: left;
    font-size: 70px;
    margin: 0 35px 17px 20px;
}
.scroll{
	position: relative;
	height: 440px;
}
.anatitle{
	border-bottom: 1px solid #f2f6f9;
    padding-bottom: 10px;
    margin-bottom: 10px !important;
    font-weight: bold;
	color: #000000 !important;
}
#destek .profile-list {
  padding: 10px 0;
}

#destek .profile-list-item {
  border-bottom: 1px solid #f2f6f9;
  padding: 6px 0;
  display: block;
}

#destek .profile-list-item:last-child {
  border-bottom: 0;
}

#destek .profile-list-item a {
  text-decoration: none;
  display: flex !important;
}

#destek .profile-list-item a .pro-pic {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 0;
  width: 20%;
  max-width: 40px;
}

#destek .profile-list-item a .pro-pic img {
  max-width: 100%;
  width: 100%;
  height: 40px;
  border-radius: 100%;
}

#destek .profile-list-item a .user {
  width: 100%;
  padding: 5px 10px 0 15px;
  flex-direction: column !important;
}

#destek .profile-list-item a .user .u-name {
  margin: 0;
  font-weight: bold;
  font-size: 0.875rem;
  line-height: 1;
  color: #797979;
}

#destek .profile-list-item a .user .u-designation {
  font-size: calc(1.0rem - 0.1rem);
  margin-bottom: 0;
  color: #9b9b9b !important;
}
#destek .item-status {
    color: #C0C9CC;
    top: 10px;
    position: relative;
    display: inline-block;
}
#destek .item-label {
    color: #C0C9CC;
}
.islem_baslik{
    font-size: 0.875rem;
    line-height: 1;
    color: #797979;
}
.islem_tarih{
    font-size: 0.8rem;
    line-height: 1;
    color: #C0C9CC !important;
}
.font-size-16{
	font-size: 16px;
}
.select2-selection{
	padding: 0.3rem 0.8rem !important;
}
.table thead th {
    vertical-align: bottom;
}
table tr {
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.table th, .table td {
    padding: .70rem;
    vertical-align: middle;
    border-top: 1px solid #e9e9e9  !important;
    color: #607d8b;
	line-height: normal;
}
.table-bordered th, .table-bordered td {
    border: 1px solid #e9e9e9 !important;
}
.headbg {
    background:#f7f7fa;
}
.noshort{
	padding-right: 0px !important;
	max-width:49px !important;
	width: 39px !important;
}
.noshort input{
	width: 18px !important;
}
th.noshort:before{
	display:none !important;
}
th.noshort:after{
	display:none !important;
}
.table tbody tr.highlight td {
	background-color: #f8f8f8;
}
.proje_resim_box {
    width: auto;
    height: auto;
    overflow: hidden;
    display: inline-block;
    border: 1px solid #EBEBEB;
    margin-right: 20px;
    margin-bottom: 20px;
}
.proje_resim_select {
    width: 30px;
    height: 30px;
    overflow: hidden;
    position: absolute;
    margin-left: 15px;
    margin-top: 15px;
    background-color: #ffffff;
    padding: 6px;
    z-index: 999;
    text-align: center;
}
.proje_resim_del {
    width: 30px;
    height: 30px;
    overflow: hidden;
    position: absolute;
    margin-left: 55px;
    margin-top: 15px;
    padding: 5px;
    background-color: #ffffff;
	    z-index: 999;
		text-align: center;
}
.proje_resim_delete {
    width: 30px;
    height: 30px;
    overflow: hidden;
    position: absolute;
    margin-left: 100px;
    margin-top: 15px;
    padding: 5px;
    background-color: #ffffff;
	    z-index: 999;
		text-align: center;
}
.ik {
    border-bottom: 1px solid #f1f1f1;
    width: 100%;
    margin-left: 0px !important;
    margin-bottom: 5px;
}
.renk{
	width:18px;
	height:18px;
	background:#ddd;
	display: inline-block;
}
.renk_baslik{
	color: #5b9bd1;
}