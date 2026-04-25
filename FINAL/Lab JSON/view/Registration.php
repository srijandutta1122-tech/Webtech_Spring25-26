<!DOCTYPE html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method = "post" action="">
        <table>
            <tr>
                <td>
                    <p style = 'color: blue'>* requird field</label>
                </td>
            </tr>
         <tr>
              <td>
                    <label>Name: </label>
                </td>
                 <td>
                    <input type="text" name="name">
             </td>
                 <td>
                    <p style = 'color:blue'>*</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
             <td>
                    <input type="email" name = "email">
                </td>
               <td>
                    <p style = 'color:blue'>*</p>
            </td>
            </tr>
               <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    <input type="radio" value="male" name="gender">
                    <label> Male</label>
                </td>
                <td>
                    <input type="radio" value="female" name="gender">
                    <label> Female</label>
                </td>
                <td>
                    <p style = 'color:blue'>*</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
              </tr>
            </table>
          </form>
      </body>
   </html>