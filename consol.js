const dataInput = document.getElementById('dataInput');

        dataInput.addEventListener('input', function(e) {
            let input = e.target.value;
            input = input.replace(/\D/g, ''); // Remove tudo que não for dígito
            if (input.length <= 2) {
                input = input;
            } else if (input.length <= 4) {
                input = input.replace(/(\d{2})(\d{0,2})/, '$1/$2');
            } else {
                input = input.replace(/(\d{2})(\d{2})(\d{0,4})/, '$1/$2/$3');
            }
            e.target.value = input;
        });