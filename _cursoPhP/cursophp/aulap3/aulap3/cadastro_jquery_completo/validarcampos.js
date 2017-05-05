// JavaScript Document
 $(document).ready( function() {
                $("#formularioContato").validate({
                    // Define as regras
                    rules:{
                        campoNome:{
                            // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
                        campoAssunto:{
                            // campoAssunto será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 10
                        },
                        campoEmail:{
                            // campoEmail será obrigatorio (required) e precisará ser um e-mail válido (email)
                            required: true, email: true
                        },
                        campoMensagem:{
                            // campoMensagem será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 30
                        }
                    },
                    // Define as mensagens de erro para cada regra
                    messages:{
                        campoNome:{
                            required: "Digite o seu nome",
                            minlength: "O seu nome deve conter, no m&iacute;nimo, 2 caracteres"
                        },
                        campoAssunto:{
                            required: "Digite o Assunto",
                            minlength: "O Assunto deve ter , no m&iacute;nimo, 10 caracteres"
                        },
                        campoEmail:{
                            required: "Digite o seu e-mail para contato",
                            email: "Digite um e-mail v&aacute;lido"
                        },
                        campoMensagem:{
                            required: "Digite a sua mensagem",
                            minlength: "A sua mensagem deve conter, no m&iacute;nimo, 30 caracteres"
                        }
                    }
                });
            });