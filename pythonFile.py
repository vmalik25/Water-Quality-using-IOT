import numpy as np
import pandas as pd
import numpy as np
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
import plotly.express as px
import warnings
warnings.filterwarnings('ignore')
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.metrics import confusion_matrix, accuracy_score, classification_report
import pickle

with open('model.pkl','rb') as f:
    fm = pickle.load(f)
data = np.array([sys.argv[1],sys.argv[2]])
prediction = fm.predict(data)
print(prediction)




