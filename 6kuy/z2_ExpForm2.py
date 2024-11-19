def expanded_form(num):
    integer_part, fractional_part = str(num).split('.')
    
    expanded_integer = [
        digit + '0' * (len(integer_part) - i - 1)
        for i, digit in enumerate(integer_part) if digit != '0'
    ]
    
    expanded_fraction = [
        digit + '/' + '1' + '0' * (i + 1)
        for i, digit in enumerate(fractional_part) if digit != '0'
    ]
    
    return ' + '.join(expanded_integer + expanded_fraction)