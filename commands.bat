::git log --name-only -n 1 > content.txt
::findstr ".txt%" content.txt > filename.txt
more filename.txt
mkdir srcDir
set cur_path=%cd%
for /f "usebackq tokens=1 delims=*" %%a in ("filename.txt") do (copy %%a %cur_path%\srcDir)