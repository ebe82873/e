# from sys import argv

# def convert_line(line: str) -> str:
#         if not line.strip().startswith('// '):
#                 return line
	
#         return fr'{line.split('// ')[0]}/* {line.split('// ')[1].strip()} */' + '\n'

# def main() -> None:
#         with open(argv[1], 'r') as styles:
#                 styles: list[str] = styles.readlines()

#         print(*[convert_line(line) for line in styles], sep='')

def fix_and_replace(line: str) -> str:
	if not 'multiplier(' in line:
		return line
	
	split_line: list[str] = line.split('multiplier(')

	split_line = [split_line[0], str(round(1.6 ** float(split_line[1].split(')')[0]), 3)), ')'.join(split_line[1].split(')')[1:])]

	return ' '.join(split_line)

def main() -> None:
	with open('styles.css', 'r') as styles:
		lines: list[str] = styles.readlines()

	lines = [
		fix_and_replace(line)
		for line in lines
	]

	# lines = [
	# 	line
	# 	for line_num, line in enumerate(lines)
	# 	if not line_num % 2
	# ]

	joined_lines: str = ''.join(lines)

	print(joined_lines)

	with open('styles.css', 'w') as styles:
		styles.write(joined_lines)

main()        
