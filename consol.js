function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]/g, ''); // Remove caracteres não numéricos
    if (cpf.length !== 11) return false; // CPF deve ter 11 dígitos
  
    // Verifica se todos os dígitos são iguais, o que é inválido
    if (/^(\d)\1+$/.test(cpf)) return false;
  
    // Calcula os dois últimos dígitos do CPF
    let soma = 0;
    for (let i = 0; i < 9; i++) {
      soma += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let resto = 11 - (soma % 11);
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(cpf.charAt(9))) return false;
  
    soma = 0;
    for (let i = 0; i < 10; i++) {
      soma += parseInt(cpf.charAt(i)) * (11 - i);
    }
    resto = 11 - (soma % 11);
    if (resto === 10 || resto === 11) resto = 0;
    if (resto !== parseInt(cpf.charAt(10))) return false;
  
    return true; // CPF válido
  }
  
  // Função para validar RG
  function validarRG(rg) {
    rg = rg.replace(/[^\d]/g, ''); // Remove caracteres não numéricos
    if (rg.length < 8 || rg.length > 9) return false; // RG deve ter entre 8 e 9 dígitos
  
    return true; // RG válido
  }
  
  // Exemplos de uso
  const cpfValido = '123.456.789-09';
  const cpfInvalido = '111.111.111-11';
  const rgValido = '12345678';
  const rgInvalido = '1234';
  
  console.log(validarCPF(cpfValido)); // Saída: true
  console.log(validarCPF(cpfInvalido)); // Saída: false
  console.log(validarRG(rgValido)); // Saída: true
  console.log(validarRG(rgInvalido)); // Saída: false