function checkCorrect(option, id, correct)
{
    exercise = document.querySelector('.check_correct_' + id);
    answer_button = document.getElementsByName('answer_button');
    if (option.is_correct)
    {
        exercise.classList.remove('text-danger');
        exercise.classList.add('text-success');
        answer_button.forEach(element => {
            element.disabled = true;
        });
        var audio = new Audio('/sounds/correct-6033.mp3');
        audio.play();
        document.getElementById('is_correct').setAttribute('value',true);
    }
    else
    {
        exercise.classList.remove('text-success')
        exercise.classList.add('text-danger');
        console.log(correct)
        answer_button.forEach(element => {
            element.disabled = true;
        });
        let p = document.getElementById('answer');
        p.innerText = correct
        var audio = new Audio('/sounds/wronganswer-37702.mp3');
        audio.play();
        document.getElementById('is_correct').setAttribute('value',false);
    }
}

function checkCorrectTranslation(correct_translation, id)
{
    exercise = document.querySelector('.check_correct_' + id);
    answer_button = document.getElementsByName('check_button');

    translated_text = document.getElementById('translated_text').value;
    if (correct_translation.localeCompare(translated_text, undefined, { sensitivity: 'base' }) === 0)
    {
        exercise.classList.remove('text-danger');
        exercise.classList.add('text-success');
        answer_button.forEach(element => {
            element.disabled = true;
        });
        var audio = new Audio('/sounds/correct-6033.mp3');
        audio.play();
        document.getElementById('is_correct').setAttribute('value',true);
    }
    else
    {
        exercise.classList.remove('text-success')
        exercise.classList.add('text-danger');
        answer_button.forEach(element => {
            element.disabled = true;
        });
        let p = document.getElementById('answer');
        p.innerText = correct_translation
        var audio = new Audio('/sounds/wronganswer-37702.mp3');
        audio.play();
        document.getElementById('is_correct').setAttribute('value',false);
    }
}
