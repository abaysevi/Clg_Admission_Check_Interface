import numpy as np


def rotateMatrix(mat):

    if not len(mat):
        return

    top = 0
    bottom = len(mat)-1

    left = 0
    right = len(mat[0])-1

    while left < right and top < bottom:

        prev = mat[top+1][left]

        for i in range(left, right+1):
            curr = mat[top][i]
            mat[top][i] = prev
            prev = curr

        top += 1
        for i in range(top, bottom+1):
            curr = mat[i][right]
            mat[i][right] = prev
            prev = curr

        right -= 1

        for i in range(right, left-1, -1):
            curr = mat[bottom][i]
            mat[bottom][i] = prev
            prev = curr

        bottom -= 1
        for i in range(bottom, top-1, -1):
            curr = mat[i][left]
            mat[i][left] = prev
            prev = curr

        left += 1

    return mat


e=input()
k=input()
length_e=len(e)
length_k=len(k)
length_verify_k=0
length_verify_e=0

if length_e <16:
    a=16-length_e
    e=e+a*" "
    length_verify_e=1
if length_verify_e ==0 and length_e>16 and length_e !=32:
    a=32-length_e
    e=e+a*" "
    length_verify_e==1


if length_k <16:
    a=16-length_k
    k=k+a*" "
    length_verify_k=1
if length_verify_k ==0 and length_k>16 and length_k !=32:
    a=32-length_k
    k=k+a*" "
    length_verify_k==1

ascci_e=[]
for each in e:
    ascci_e.append(ord(each))

ascci_k=[]
for each in k:
    ascci_k.append(ord(each))

earray = np.array(ascci_e)
karray = np.array(ascci_k)

shape = (4,4)

e_set=earray.reshape(shape)
k_set=karray.reshape(shape)

print(e_set)
print(k_set)
me=e_set
mk=rotateMatrix(k_set)
print(mk)