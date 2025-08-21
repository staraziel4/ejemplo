import re
import time

# Read in flag from file
flag = open('flag.txt', 'r').read()

# Mostrar flag directamente
print("==== FLAG ====")
print(flag)
print("==============\n")

secret_intro = \
'''Pico warriors rising, puzzles laid bare,
Solving each challenge with precision and flair.
With unity and skill, flags we deliver,
The ether’s ours to conquer, '''\
+ flag + '\n'


