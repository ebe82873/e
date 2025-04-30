import string

user_input: str = ''

while True:
    inp: str = input()

    if inp == '<exit>':
        break

    user_input += f'{inp}\n'

for char in user_input:
    if char in [*string.ascii_letters, *string.punctuation, ' ', '\n']:
        print(char, end='')
